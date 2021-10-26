<?php

namespace App\Http\Controllers;

use App\Persewaan;
use App\User;
use App\Produk;
use Illuminate\Http\Request;

class PersewaanController extends Controller
{
    public function index()
    {
        $persewaan = Persewaan::all();
        return view('owner.persewaan.index', ['persewaan' => $persewaan]);
    }
}
