<?php

namespace App\Http\Controllers;
use App\Models\JenisBunga;
use App\Models\MomentBunga;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller
{
    public function homeView(){
        $contexts = [
            'produkUnggulan' => Product::query()->where('status', '=', true)->inRandomOrder()->limit(4)->get()
        ];
        return view(view: 'index', data: $contexts);
    }
}
