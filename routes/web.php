<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ADMIN
Route::controller(AdminController::class)->group(
    function (){
        Route::middleware(\App\Http\Middleware\OnlyAdmin::class)->group(
            function (){
                Route::get(uri:'admin/dashboard', action: 'dashboardView');
                Route::get(uri:'admin/products', action: 'productsView');
                Route::get(uri:'admin/edit-tags', action: 'tagsView');
                Route::get(uri: '/admin/pesanan/belum-lunas', action:'pesananBelumLunasView');
                Route::get(uri: '/admin/pesanan/lunas', action:'pesananLunasView');
                Route::get(uri: '/admin/pesanan/selesai', action:'pesananSelesaiView');
                Route::get(uri: '/admin/pesanan/detail/{id}', action:'pesananDetailView');

                Route::post(uri: '/confirm-pesanan-selesai/', action:'confirmSelesai');

                Route::post(uri:'admin/edit-tags/add-jenis', action: 'addjenisbunga');
                Route::post(uri:'/admin/edit-tags/delete-jenis', action: 'deletejenisbunga');
                Route::post(uri:'/admin/edit-tags/update-jenis', action: 'updatejenisbunga');

                Route::post(uri:'admin/edit-tags/add-model', action: 'addModelBunga');
                Route::post(uri:'admin/edit-tags/update-model', action: 'updateModelBunga');
                Route::post(uri:'admin/edit-tags/delete-model', action: 'deleteModelBunga');


                Route::post(uri:'admin/edit-tags/add-moment', action: 'addMomentBunga');
                Route::post(uri:'admin/edit-tags/update-moment', action: 'updateMomentBunga');
                Route::post(uri:'admin/edit-tags/delete-moment', action: 'deleteMomentBunga');

                Route::get(uri:'admin/tambah-product', action: 'tambahProductView');
                Route::post(uri:'admin/tambah-product', action: 'tambahProductLogic');
                Route::get(uri:'admin/edit-product/{id}', action: 'editProductView');
                Route::post(uri:'admin/edit-product/{id}', action: 'editProductLogic');
                Route::get(uri:'admin/delete-product/{id}', action: 'deleteProductLogic');

            }
        );
    }
);

Route::controller(AuthController::class)->group(
    function (){
        Route::get(uri: '/login', action: 'loginView')->name('LoginPage')->middleware(middleware: 'guest');
        Route::post(uri: '/login', action: 'loginlogic')->name('LoginPage');

        Route::get(uri: '/register', action: 'registerView')->name('RegisterPage')->middleware(middleware: 'guest');
        Route::post(uri: '/register', action: 'registerlogic')->name('RegisterPage');


        Route::get(uri: '/logout', action: 'logoutlogic')->name('Logout');
    }
);

Route::controller(UserController::class)->group(
    function (){
        Route::middleware(\App\Http\Middleware\BlockAdmin::class)->group(
            function (){
                Route::get(uri: '/profile', action: 'profileView')->name('ProfilePage')->middleware(middleware: 'auth');
                Route::post(uri: '/profile', action: 'simpanProfile')->name('ProfilePagePost')->middleware(middleware: 'auth');
                Route::get(uri: '/riwayat-pembelian', action: 'riwayatPembelianView')->name('RiwayatPembelianPage')->middleware(middleware: 'auth');
                Route::get(uri: '/riwayat-pembelian/{id}', action: 'detailRiwayatPembelian')->middleware(middleware: 'auth');
            }
        );
    }
);

Route::controller(DetailProductController::class)->group(
    function (){
        Route::middleware(\App\Http\Middleware\BlockAdmin::class)->group(
            function (){
                Route::get(uri:'detail-product/{uid}', action: 'detailProductView');
            }
        );
    }
);


Route::controller(ProductsController::class)->group(
    function (){
        Route::middleware(\App\Http\Middleware\BlockAdmin::class)->group(
            function (){
                Route::get(uri: '/products', action: 'productsView');
            }
        );
    }
);


Route::controller(KeranjangController::class)->group(
    function (){
        Route::middleware(\App\Http\Middleware\BlockAdmin::class)->group(
            function (){
                Route::get(uri: '/keranjang', action:'keranjangView')->name('KeranjangPage');
                Route::post(uri: '/keranjang', action:'checkOut');
                Route::post(uri:'/add-to-cart', action: 'addToCart');
                Route::post(uri:'/delete-from-cart', action: 'deleteFromCart');
            }
        );
    }
);

Route::controller(HomeController::class)->group(
    function (){
        Route::middleware(\App\Http\Middleware\BlockAdmin::class)->group(
            function (){
                Route::get(uri: '/', action: 'homeView')->name('HomePage');
            }
        );
    }
);
