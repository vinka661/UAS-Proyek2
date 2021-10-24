<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }
    public function produk()
    {
        return view('produk');
    }
}
