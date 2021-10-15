<?php

namespace App\Http\Controllers;

use App\JenisProduk;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Gate;

class JenisProdukController extends Controller
{
    public function index()
    {
        $jenisproduk = JenisProduk::all();
        return view('owner.jenisproduk.index', ['jenisproduk' => $jenisproduk]);
    }
}
