<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\JenisProduk;

class DashboardController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }
    public function produk1()
    {
        $produk = Produk::all();
		return view('produk1',['produk'=> $produk]);
    }
}
