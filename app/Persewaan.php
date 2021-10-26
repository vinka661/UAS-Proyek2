<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Persewaan extends Model
{
    public $table = "persewaan";
    protected $fillable = ['namaproduk', 'harga', 'satuan', 'status', 'stok', 'id_jenis'];

    public function jenisproduk()
    {
        return $this->belongsTo('App\JenisProduk', 'id_jenis');
    }
}
