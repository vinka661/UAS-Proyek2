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

    public function create()
    {
        return view('owner.jenisproduk.create');
    }

    public function store(Request $request)
    {
        JenisProduk::create([
            'namajenis' => $request->namajenis,
        ]);
        return redirect('jenisproduk');
    }

    public function edit($id)
    {
        $jenisproduk = JenisProduk::find($id);
        return view('owner.jenisproduk.edit', ['jenisproduk' => $jenisproduk]);
    }

    public function update(Request $request, $id)
    {
        $jenisproduk = JenisProduk::find($id);
        $jenisproduk->namajenis = $request->namajenis;
        $jenisproduk->save();
        return redirect('jenisproduk');
    }
    public function destroy($id)
    {
        $jenisproduk = JenisProduk::find($id);
        $jenisproduk->delete();
        return redirect('jenisproduk');
    }
}
