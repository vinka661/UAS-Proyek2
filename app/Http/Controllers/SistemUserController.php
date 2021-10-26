<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SistemUserController extends Controller
{
    public function index()
    {
        $sistemuser = User::all();
        return view('owner.sistemuser.index', ['sistemuser' => $sistemuser]);
    }
}
