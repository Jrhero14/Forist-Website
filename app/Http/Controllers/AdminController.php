<?php

namespace App\Http\Controllers;

use App\Models\JenisBunga;
use App\Models\ModelBunga;
use App\Models\MomentBunga;
use App\Models\Product;
use App\Models\ProductSelled;
use App\Models\ShoppingStage;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use function Termwind\terminal;

class AdminController extends Controller
{
    public function dashboardView(){
        $productSelled = DB::table('product_selleds')->select('judul')->groupBy('judul')->get();
        $productTerlaris = [];
        foreach ($productSelled as $data){
            $productTerlaris[] = [
                'judul' => $data->judul,
                'terjual' => count(ProductSelled::where('judul', '=', $data->judul)->get()),
            ];
        }
        $contexts = [
            'total_product' => count(Product::all()),
            'total_terjual' => count(ShoppingStage::where('status', '=', true)->get()),
            'total_user' => count(User::where('admin', '!=', true)->get()),
            'product_terlaris' => $productTerlaris,
        ];
        return view('admin.dashboard', $contexts);
    }

    public function productsView(){
        $contexts = [
            'products' => Product::with(['jenis', 'model', 'moment'])->latest()->get()
        ];
        return view('admin.products', $contexts);
    }

    protected $data = [
        'pesanans' => null,
        'total_pesanan_belum_lunas' => 0,
        'total_pesanan_lunas' => 0,
        'total_pesanan_selesai' => 0
    ];

    private function getDataPesanan(string $jenis){
        $dataPesananBelumLunas = ShoppingStage::where('status', '=', false)->get();
        $dataPesananLunas = ShoppingStage::where([
            ['status', '=', true],
            ['selesai', '=', false],
        ])->get();
        $dataPesananSelesai = ShoppingStage::where('selesai', '=', true)->get();
        $this->data['total_pesanan_belum_lunas'] = count($dataPesananBelumLunas);
        $this->data['total_pesanan_lunas'] = count($dataPesananLunas);
        $this->data['total_pesanan_selesai'] = count($dataPesananSelesai);

        if($jenis == 'lunas'){
            $this->data['pesanans'] = $dataPesananLunas;
        }elseif ($jenis == 'belum lunas'){
            $this->data['pesanans'] = $dataPesananBelumLunas;
        }
        else{
            $this->data['pesanans'] = $dataPesananSelesai;
        }
        return $this->data;
    }

    public function pesananBelumLunasView(){
        $contexts = $this->getDataPesanan('belum lunas');
        return view('admin.pesanan-belum-lunas', $contexts);
    }

    public function pesananLunasView(){
        $contexts = $this->getDataPesanan('lunas');
        return view('admin.pesanan-lunas', $contexts);
    }

    public function pesananDetailView($id){
        $getDetailRiwayat = ShoppingStage::with('ProductSelleds')->where([
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
        return view('admin.detail-pesanan', $contetxs);
    }

    public function pesananSelesaiView(){
        $contexts = $this->getDataPesanan('selesai');
        return view('admin.pesanan-selesai', $contexts);
    }

    public function confirmSelesai(Request $request){
        $data = $request->validate([
            'nomorPesanan' => 'required',
            'resi' => 'required',
        ]);

        $getDataProductSelled = ShoppingStage::with('ProductSelleds')->where('nomorPesanan', '=', $data['nomorPesanan'])->first();
        foreach ($getDataProductSelled->ProductSelleds as $index => $produk){
            if ($produk->metodePengiriman){
                $produk->resi = $data['resi'][$index];
                $produk->save();
            }
        }
        $getDataProductSelled->selesai = true;
        $getDataProductSelled->save();

        Alert::toast('Produk telah selesai Diproses', 'success');
        return redirect('/admin/pesanan/selesai');
    }

    public function editProductView($id){
        $dataProduct = Product::with(['jenis', 'model', 'moment'])->where('id', '=', $id)->first();
        $dataJenis = JenisBunga::all();
        $dataModel = ModelBunga::all();
        $dataMoment = MomentBunga::all();
        $contexts = [
            'dataProduct' => $dataProduct,
            'jeniss' => $dataJenis,
            'models' => $dataModel,
            'moments' => $dataMoment
        ];
        return view('admin.edit-product', $contexts);
    }

    public function tagsView(){

        $getJenis = JenisBunga::all();
        $getMoment = MomentBunga::all();
        $getModel = ModelBunga::all();

        $contexts = [
            'jenis_bungas' => $getJenis,
            'moment_bungas' => $getMoment,
            'model_bungas' => $getModel,
        ];

        return view('admin.edit-tags', $contexts);
    }

    public function tambahProductView(){
        $dataJenis = JenisBunga::all();
        $dataModel = ModelBunga::all();
        $dataMoment = MomentBunga::all();

        $contexts = [
            'jeniss' => $dataJenis,
            'models' => $dataModel,
            'moments' => $dataMoment
        ];

        return view('admin.add-product', $contexts);
    }

    public function deleteProductLogic($id){
        $getProduct = Product::where('id', '=', $id)->first();
        if($getProduct == null){
            Alert::toast('Gagal hapus, product tidak ditemukan', 'error');
            return redirect('/admin/products');
        }
        $getProduct->delete();
        Alert::toast('Hapus Product Berhasil', 'success');
        return redirect('/admin/products');
    }

//    POST METHOD
    public function tambahProductLogic(Request $request){
        $data = $request->validate([
            'gambarProduct' => 'required',
            'namaproduct' => 'required',
            'deskripsi' => 'required',
            'hargasatuan' => 'required',
            'stock' => 'required',
            'jenisTags' => 'required',
            'modelTags' => 'required',
            'momentTags' => 'required',
            'status' => 'required',
        ]);

        $response = Http::attach('image', file_get_contents($request->file('gambarProduct')), 'photo.jpg')
            ->post("https://api.imgbb.com/1/upload",
                [
                    'key' => 'cc2fb31bb534ef735f2ec080c490206f',
                ]);
        $urlImage = json_decode($response->getBody()->getContents(), true)['data']['url'];

        $newProduct = Product::create([
            'judul' => $data['namaproduct'],
            'photourl' => $urlImage,
            'deskripsi' => $data['deskripsi'],
            'harga' => $data['hargasatuan'],
            'stock' => $data['stock'],
            'status' => true,
        ]);

        foreach ($data['jenisTags'] as $jenis){
            $getJenis = JenisBunga::where('nama_bunga', $jenis)->first();
            $newProduct->jenis()->attach([$getJenis->id]);
        }

        foreach ($data['modelTags'] as $model){
            $getModel = ModelBunga::where('nama_model', $model)->first();
            $newProduct->model()->attach([$getModel->id]);
        }

        foreach ($data['momentTags'] as $moment){
            $getMoment = MomentBunga::where('nama_moment', $moment)->first();
            $newProduct->moment()->attach([$getMoment->id]);
        }

        Alert::toast('Product Berhasil ditambah', 'success');
        return redirect('/admin/products');
    }

    public function editProductLogic(Request $request, $id){
        $urlImage = false;
        try {
            $data = $request->validate([
                'gambarProduct' => 'required',
                'namaproduct' => 'required',
                'deskripsi' => 'required',
                'hargasatuan' => 'required',
                'stock' => 'required',
                'jenisTags' => 'required',
                'modelTags' => 'required',
                'momentTags' => 'required',
                'status' => 'required',
            ]);

            $response = Http::attach('image', file_get_contents($request->file('gambarProduct')), 'photo.jpg')
                ->post("https://api.imgbb.com/1/upload",
                    [
                        'key' => 'cc2fb31bb534ef735f2ec080c490206f',
                    ]);
            $urlImage = json_decode($response->getBody()->getContents(), true)['data']['url'];
        }catch (Exception $e){
            $data = $request->validate([
                'namaproduct' => 'required',
                'deskripsi' => 'required',
                'hargasatuan' => 'required',
                'stock' => 'required',
                'jenisTags' => '',
                'modelTags' => '',
                'momentTags' => '',
                'status' => '',
            ]);
        }

        $getProduct = Product::where('id', '=', $id)->first();
        $getProduct->judul = $data['namaproduct'];
        $getProduct->photourl = $urlImage ? $urlImage : $getProduct->photourl;
        $getProduct->deskripsi = $data['deskripsi'];
        $getProduct->harga = $data['hargasatuan'];
        $getProduct->stock = $data['stock'];
        try {
            $a = $data['status'];
            $getProduct->status = 1;
        }catch (Exception $e){
            $getProduct->status = 0;
        }
        $getProduct->save();

        $jenisArray = array();
        try {
            foreach ($data['jenisTags'] as $jenistag){
                $getJenis = JenisBunga::where('nama_bunga', $jenistag)->first();
                $jenisArray[] = $getJenis->id;
            }
            $getProduct->jenis()->sync($jenisArray);
        }
        catch (Exception $e){
            $getProduct->jenis()->sync([]);
        }

        $modelArray = array();
        try {
            foreach ($data['modelTags'] as $modeltag){
                $getModel = ModelBunga::where('nama_model', $modeltag)->first();
                $modelArray[] = $getModel->id;
            }
            $getProduct->model()->sync($modelArray);
        }
        catch (Exception $e){
            $getProduct->model()->sync([]);
        }

        $momentArray = array();
        try {
            foreach ($data['momentTags'] as $momenttag){
                $getMoment = MomentBunga::where('nama_moment', $momenttag)->first();
                $momentArray[] = $getMoment->id;
            }
            $getProduct->moment()->sync($momentArray);
        }
        catch (Exception $e){
            $getProduct->moment()->sync([]);
        }

        Alert::toast('Perubahan Berhasil Disimpan', 'success');
        return redirect('/admin/products');
    }

    public function addjenisbunga(Request $request){
        $data = $request->validate([
            'jenisbunga' => 'required|max:255'
        ]);

        JenisBunga::create([
            'nama_bunga' => $data['jenisbunga']
        ]);

        Alert::toast('Jenis Bunga Berhasil ditambahkan', 'success');
        return redirect('/admin/edit-tags');
    }

    public function updatejenisbunga(Request $request){
        $data = $request->validate([
            'idJenisBunga' => 'required|max:255',
            'editJenisBunga' => 'required|max:255'
        ]);

        $getJenis = JenisBunga::find((int) $data['idJenisBunga']);
        $getJenis->nama_bunga = $data['editJenisBunga'];
        $getJenis->save();
        Alert::toast('Berhasil Update Jenis Bunga', 'success');
        return redirect('/admin/edit-tags');
    }

    public function deletejenisbunga(Request $request){
        $data = $request->validate([
            'idJenis' => 'required'
        ]);

        JenisBunga::where('id', '=', (int)$data['idJenis'])->delete();

        Alert::toast('Data Berhasil dihapus', 'success');
        return redirect('admin/edit-tags');

    }

    public function addModelBunga(Request $request){
        $data = $request->validate([
            'namaModel' => 'required|max:255'
        ]);

        ModelBunga::create([
            'nama_model' => $data['namaModel']
        ]);

        Alert::toast('Model Bunga Berhasil ditambah', 'success');
        return redirect('admin/edit-tags');
    }

    public function updateModelBunga(Request $request){
        $data = $request->validate([
            'idModelBunga' => 'required',
            'editModelBunga' => 'required|max:255'
        ]);

        $getModel = ModelBunga::find($data['idModelBunga']);
        $getModel->nama_model = $data['editModelBunga'];
        $getModel->save();

        Alert::toast('Update data model bunga berhasil', 'success');
        return redirect('admin/edit-tags');
    }

    public function deleteModelBunga(Request $request){
        $data = $request->validate([
            'idModelBunga' => 'required'
        ]);

        $getModel = ModelBunga::find($data['idModelBunga']);
        $getModel->delete();

        Alert::toast('Hapus Model Bunga Berhasil', 'success');
        return redirect('admin/edit-tags');
    }
    public function updateMomentBunga(Request $request){
        $data = $request->validate([
            'idMomentBunga' => 'required',
            'editMomentBunga' => 'required|max:255'
        ]);

        $getMoment = MomentBunga::find($data['idMomentBunga']);
        $getMoment->nama_moment = $data['editMomentBunga'];
        $getMoment->save();

        Alert::toast('Update data moment bunga berhasil', 'success');
        return redirect('admin/edit-tags');
    }

    public function addMomentBunga(Request $request){
        $data = $request->validate([
            'namaMoment' => 'required|max:255'
        ]);

        MomentBunga::create([
            'nama_moment' => $data['namaMoment']
        ]);

        Alert::toast('Tambah moment bunga berhasil', 'success');
        return redirect('/admin/edit-tags');
    }

    public function deleteMomentBunga(Request $request){
        $data = $request->validate([
            'idMomentBunga' => 'required'
        ]);

        MomentBunga::find($data['idMomentBunga'])->delete();

        Alert::toast('Hapus Moment Bunga Berhasil', 'success');
        return redirect('admin/edit-tags');
    }
}
