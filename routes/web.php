<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasahboardController;
use App\Http\Controllers\OngkirController;
use App\Http\Controllers\LoginController;
use App\Models\Produk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DasahboardController::class,'index']);

Route::get('/produk',[DasahboardController::class,'Produk']);
Route::get('/addProduk',[DasahboardController::class,'addProduk']);
Route::post('/addProduk',[DasahboardController::class,'addProdukPost']);
Route::get('/editProduk{id}',[DasahboardController::class,'editProduk']);
Route::post('/editProduk',[DasahboardController::class,'editProdukPost']);
Route::get('/hapusProduk{id}',function($id)
{
    $produk = Produk::find($id);
        // dd(date("Y-m-d H:i:s"));
        $produk->update_by = 1;
        $produk->updated_at = date("Y-m-d H:i:s");
        $produk->active = 0;

        if($produk->save()){
            return redirect('/produk')->with('sukses','Berhasil Menghapus Produk '.$produk->produk_name);
        }else{
            return redirect('/produk')->with('gagal','Gagal Menghapus Produk '.$produk->produk_name);
        }
});


//Ongkir Controller
Route::get('/ongkir',[OngkirController::class,'index']);
Route::post('/ongkir',[OngkirController::class,'result']);

Route::get('/login',[LoginController::class,'index']);

Route::get('/logout',[LoginController::class,'logout']);

Route::post('/login',[LoginController::class,'postLogin']);