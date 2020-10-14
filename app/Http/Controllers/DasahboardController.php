<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Response;
use DateTime;
use DatePeriod;
use Illuminate\Support\Facades\Hash;
use App\Models\Produk;
use DateInterval;
use Auth;


class DasahboardController extends Controller
{
    public function Produk()
    {
        $produk = $produk = Produk::all()->where('active',1);
        // DD($produk);
        return view('dashboard.produk',
            [
                'produk'=>$produk,
            ]
        );
    }
    public function addProduk()
    {
        $produk = Produk::all()->where('active',1);
        
        return view('dashboard.addproduk',
            [
                'produk'=>$produk,
            ]
        );
    }
    public function addProdukPost(Request $request)
    {
        $produk = new Produk;
        $produk->kd_produk = $request->kd;
        $produk->produk_name = $request->nama;
        $produk->jumlah = $request->jumlah;
        $produk->harga = $request->harga;
        $produk->insert_by =1;
        $produk->update_by = 1;
        $produk->active = 1;

        if($produk->save()){
            return redirect('/addProduk')->with('sukses','Berhasil Menambah Produk '.$request->nama);
        }else{
            return redirect('/addProduk')->with('gagal','Gagal Menambah Produk '.$request->nama);
        }
    }
    public function editProduk($id)
    {
        $produk = Produk::all()->where('active',1)->where('id',$id);
        // dd($produk);
        return view('dashboard.editproduk',
            [
                'produk'=>$produk,
            ]
        );
    }
    public function editProdukPost(Request $request)
    {
        $produk = Produk::find($request->id);

        // dd($produk);
        $produk->kd_produk = $request->kd;
        $produk->produk_name = $request->nama;
        $produk->jumlah = $request->jumlah;
        $produk->harga = $request->harga;
        $produk->insert_by =1;
        $produk->update_by = 1;
        $produk->active = 1;
        $produk->updated_at = date("Y-m-d H:i:s");

        if($produk->save()){
            return redirect('/editProduk'.$request->id)->with('sukses','Berhasil Mengedit Produk '.$request->nama);
        }else{
            return redirect('/editProduk'.$request->id)->with('gagal','Gagal Mengedit Produk '.$request->nama);
        }
    }
}
