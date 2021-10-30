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

    public function create()
    {
        $sistemuser = User::where('roles', 'Customer')->get();
        $produk = Produk::all();
        return view('owner.persewaan.create', ['sistemuser' => $sistemuser, 'produk' => $produk]);
    }

    public function store(Request $request)
    {
        $produk = \App\Produk::find($request->id_produk);
        //$total = $produk->harga * $request->qty;

        Persewaan::create([
            'qty' => $request->qty,
            'tanggal_sewa' => $request->tanggal_sewa,
            'harga_total' => $request->harga_total,
            'bayar' => $request->bayar,
            'kembalian' => $request->kembalian,
            'id_user' => $request->user,
            'id_produk' => $request->produk,
        ]);
        return redirect('persewaan');
    }

    public function edit($id)
    {
        $persewaan = Persewaan::find($id);
        $sistemuser = User::where('roles', 'Customer')->get();
        $produk = Produk::all();
        return view('owner.persewaan.edit', ['persewaan' => $persewaan, 'sistemuser' => $sistemuser, 'produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
        $persewaan = Persewaan::find($id);
        $persewaan->qty = $request->qty;
        $persewaan->tanggal_sewa = $request->tanggal_sewa;
        $persewaan->harga_total = $request->harga_total;
        $persewaan->bayar = $request->bayar;
        $persewaan->kembalian = $request->kembalian;
        $persewaan->id_user = $request->user;
        $persewaan->id_produk = $request->produk;
        $persewaan->save();
        return redirect('persewaan');
    }

    public function destroy($id)
    {
        $persewaan = Persewaan::find($id);
        $persewaan->delete();
        return redirect('persewaan');
    }
}
