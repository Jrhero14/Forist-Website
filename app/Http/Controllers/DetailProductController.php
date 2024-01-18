<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DetailProductController extends Controller
{
    public function detailProductView(Request $request, $uid){
        $getProduct = Product::where('id', '=', $uid)->first();

        if(!$getProduct){
            Alert::toast('Product Not Found', 'error');
            return redirect('/');
        }

        $contexts = [
            'produk' => $getProduct
        ];
        return view('detail-product', $contexts);
    }
}
