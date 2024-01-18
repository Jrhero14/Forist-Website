<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productsView(Request $request){
        return view('products');
    }
}
