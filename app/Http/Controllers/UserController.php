<?php

namespace App\Http\Controllers;

use App\Models\ShoppingStage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function profileView(){
        return view('profile');
    }

    public function riwayatPembelianView(){
        $Getriwayats = ShoppingStage::where('user_id', '=', auth()->user()->id)->latest('id')->get();
        $contexts = [
            'riwayats' => $Getriwayats
        ];
        return view('riwayatpembelian', $contexts);
    }

//    POST METHOD

    public function simpanProfile(Request $request){
        $data = $request->validate([
            'namalengkap' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'kodepos' => 'required'
        ]);


        auth()->user()->name = $data['namalengkap'];
        auth()->user()->alamat = $data['alamat'];
        auth()->user()->nomortelp = $data['telepon'];
        auth()->user()->kodepos = $data['kodepos'];
        auth()->user()->save();

        Alert::toast('Data Profile Tersimpan', 'success');
        return redirect('/profile');
    }

    public function detailRiwayatPembelian($id){
        $getDetailRiwayat = ShoppingStage::with('ProductSelleds')->where([
            ['user_id', '=', auth()->user()->id],
            ['nomorPesanan', '=', $id],
        ])->first();

        $subTotal = 0;
        $pajak = 0;
        $ongkir = 0;
        foreach ($getDetailRiwayat->ProductSelleds as $selled){
            $subTotal += $selled->harga;
            if ($selled->metodePengiriman){
                $ongkir += 50000;
            }
        }
        $pajak = $subTotal * 0.02;

        $contetxs = [
            'riwayat' =>$getDetailRiwayat,
            'subtotal' => $subTotal,
            'pajak' => $pajak,
            'ongkir' => $ongkir,
        ];

        return view('detail-riwayat-pesanan', $contetxs);
    }
}
