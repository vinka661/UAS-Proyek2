<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Persewaan extends Model
{
    public $table = "persewaan";
    protected $fillable = ['qty', 'tanggal_sewa', 'harga_total', 'bayar', 'kembalian', 'id_user', 'id_produk'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'id_produk');
    }
}
