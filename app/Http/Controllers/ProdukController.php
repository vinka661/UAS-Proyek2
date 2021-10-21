<?php

namespace App\Http\Controllers;

use App\Produk;
use App\JenisProduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function model()
    {
        $data = new Produk();
        return $data;
    }

    public function index()
    {
        $produk = Produk::all();
        return view('owner.produk.index', ['produk' => $produk]);
    }

    public function create()
    {
        $jenisproduk = JenisProduk::all();
        return view('owner.produk.create', ['jenisproduk' => $jenisproduk]);
    }

    public function store(Request $request)
    {
        Produk::create([
            'namaproduk' => $request->namaproduk,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'status' => $request->status,
            'id_jenis' => $request->jenis,
        ]);
        return redirect('produk');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        $jenisproduk = JenisProduk::all();
        return view('owner.produk.edit', ['produk' => $produk, 'jenisproduk' => $jenisproduk]);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->namaproduk = $request->namaproduk;
        $produk->harga = $request->harga;
        $produk->satuan = $request->satuan;
        $produk->status = $request->status;
        $produk->id_jenis = $request->jenis;
        $produk->save();
        return redirect('produk');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('produk');
    }
}