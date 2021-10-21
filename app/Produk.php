<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Produk extends Model
{
    public $table = "produk";
    protected $fillable = ['namaproduk', 'harga', 'satuan', 'status', 'id_jenis'];

    public function jenisproduk()
    {
        return $this->belongsTo('App\JenisProduk', 'id_jenis');
    }
}
