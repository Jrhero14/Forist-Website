<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ProductSelled;
use App\Models\ShoppingStage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;
use RealRashid\SweetAlert\Facades\Alert;

class KeranjangController extends Controller
{
    public function keranjangView(Request $request){
        if(auth()->user()){
            $products = Cart::with('Product')->where('user_id', '=', auth()->user()->id)->get();
        }
        else{
            return redirect('/login');
        }

        $subtotal = 0;
        $ongkir = 0;
        foreach ($products as $prod){
            $subtotal += $prod->Product->harga;
            if ($prod->metodePengiriman){
                $ongkir += 50000;
            }
        }

        $pajak = $subtotal * 0.02;
        $total = $subtotal + $pajak + $ongkir;

        $contexts = [
            'produks' => $products,
            'subtotal' => $subtotal,
            'pajak' => $pajak,
            'ongkir' => $ongkir,
            'totalharga' => $total,
            'token' => ($request->t ? $request->t : false),
        ];
        return view('keranjang', $contexts);
    }

    public function checkOut(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'notelp' => 'required',
        ]);

        # Generate ID Transaction
        $id_transaction = strval(rand(min: 100000, max: 999999));
        while (true){
            if(!ShoppingStage::where('nomorPemesanan', '=', $id_transaction)){
                $id_transaction = strval(rand(min: 100000, max: 999999));
            }
            else{
                break;
            }
        }

        $productsCart = Cart::with('Product')->where('user_id', '=', auth()->user()->id)->get();
        $produk = [];
        $selled = [];
        $totalHarga = 0;
        $ongkir = 0;
        foreach ($productsCart as $prod){
            $productSelled = ProductSelled::create([
                'judul' => $prod->Product->judul,
                'photourl' => $prod->Product->photourl,
                'deskripsi' => $prod->Product->deskripsi,
                'harga' => $prod->Product->harga,
                'statusPembayaran' => false,
            ]);
            $selled[] = $productSelled->id;

            $produk[] = array(
                'id' => $prod->product_id,
                'name' => $prod->Product->judul,
                'price' => $prod->Product->harga,
                'quantity' => 1,
                'merchant_name' => "ForistStore",
                'total' => $prod->Product->harga,
            );
            $totalHarga += $prod->Product->harga;

            if ($prod->metodePengiriman){
                $productSelled->metodePengiriman = true;
                $productSelled->tanggalPengiriman = $prod->tanggalPengiriman;
                $productSelled->namaPenerima = $prod->namaPenerima;
                $productSelled->nomorPenerima = $prod->nomorPenerima;
                $productSelled->alamat = $prod->alamat;
                $productSelled->kodePos = $prod->kodePos;
                $productSelled->save();
                $produk[] = array(
                    'id' => 'KURIR',
                    'name' => 'Ongkir Jasa Kurir',
                    'price' => 50000,
                    'quantity' => 1,
                    'merchant_name' => "ForistStore",
                    'total' => 50000,
                );
                $ongkir += 50000;
            }
            else{
                $productSelled->metodePengiriman = false;
                $productSelled->tanggalPickup = $prod->tanggalPickup;
                $productSelled->namaPemesan = $prod->namaPemesan;
                $productSelled->save();
            }
        }

        // Delete Product From Cart
        foreach ($productsCart as $prod){
            Cart::where('id', '=', $prod->id)->first()->delete();
        }

        $pajak = $totalHarga * 0.02;
        $produk[] = array(
            'id' => 'PAJAK',
            'name' => 'Pajak 2%',
            'price' => $pajak,
            'quantity' => 1,
            'merchant_name' => "ForistStore",
            'total' => $pajak,
        );
        $gross_amount = $totalHarga+$pajak+$ongkir;

        if ($gross_amount == 0){
            Alert::toast('Anda belum menambahkan produk ke Keranjang', 'error');
            return redirect('/keranjang');
        }

        // MIDTRANS HERE
        Config::$serverKey = 'SB-Mid-server-fue26igFJPllTrngDIOnppF5';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = false;

        $params = array(
            'transaction_details' => array(
                'order_id' => $id_transaction,
                'gross_amount' => $gross_amount,
            ),
            'item_details' => $produk,
            'customer_details' => array(
                'first_name' => $data['nama'],
                'last_name' => ' ',
                'email' => $data['email'],
                'phone' => $data['notelp'],
            ),
        );
        $snapToken = Snap::getSnapToken($params);
        error_log($snapToken);

        # TransactionStage
        $produStagging = ShoppingStage::create([
            'user_id' => auth()->user()->id,
            'nomorPesanan' => $id_transaction,
            'tokenMidtrans' => $snapToken,
            'totalHarga' => $gross_amount,
            'status' => false,
        ]);
        $produStagging->ProductSelleds()->sync($selled);

        return redirect("/riwayat-pembelian/{$id_transaction}?t={$snapToken}");
    }

    public function deleteFromCart(Request $request){
        $data = $request->validate([
            'id_cart' => 'required',
            'id_produk' => 'required',
            'id_user' => 'required'
        ]);

        Cart::where([
            ['id', '=', $data['id_cart']],
            ['product_id', '=', $data['id_produk']],
            ['user_id', '=', $data['id_user']]
        ])->first()->delete();
        Alert::toast('Berhasil Menghapus Product dari Keranjang', 'success');
        return redirect('/keranjang');
    }

    public function addToCart(Request $request){
        if(!Auth::check()){
            Alert::error('Tidak Ada Autentikasi', 'Anda belum login');
            return redirect('/login');
        }

        $pengiriman = $request->only([
            'metodePengiriman'
        ]);

        if($pengiriman === []){
            Alert::toast('Bad Request', 'error');
            return redirect('/');
        }

        if($pengiriman['metodePengiriman'] == 'Kurir'){
            $data = $request->validate([
                'id' => 'required',
                'tglPengiriman' => 'required',
                'namapenerima' => 'required',
                'nomorpenerima' => 'required',
                'alamatPenerima' => 'required',
                'kodepos' => 'required'
            ]);

            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $data['id'],
                'metodePengiriman' => true,
                'tanggalPengiriman' => Carbon::createFromFormat('Y-m-d', $data['tglPengiriman']),
                'namaPenerima' => $data['namapenerima'],
                'nomorPenerima' => $data['nomorpenerima'],
                'alamat' => $data['alamatPenerima'],
                'kodePos' => $data['kodepos'],
            ]);
        }else{
            $data = $request->validate([
                'id' => 'required',
                'tglPengiriman2' => 'required',
                'namapemesan2' => 'required',
            ]);

            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $data['id'],
                'metodePengiriman' => false,
                'tanggalPickup' => Carbon::createFromFormat('Y-m-d', $data['tglPengiriman2']),
                'namaPemesan' => $data['namapemesan2'],
            ]);
        }

        Alert::toast('Product berhasil masuk keranjang', 'success');
        return redirect('/keranjang');
    }
}
