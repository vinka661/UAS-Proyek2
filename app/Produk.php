<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Produk extends Model
{
    public $table = "produk";
    protected $fillable = ['namaproduk', 'harga', 'satuan','image', 'status', 'stok', 'id_jenis'];

    public function jenisproduk()
    {
        return $this->belongsTo('App\JenisProduk', 'id_jenis');
    }

    public function persewaan()
    {
        return $this->hasMany('App\Persewaan', 'id_produk');
    }
}
