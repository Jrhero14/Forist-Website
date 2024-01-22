<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productsView(Request $request){
        $contexts = [
            'products' => Product::where('status', '=', true)->get()
        ];
        return view('products', $contexts);
    }
}
