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

    public function uploadFile(Request $request,$oke)
    {
            $result ='';
            $file = $request->file($oke);
            $name = $file->getClientOriginalName();
            // $tmp_name = $file['tmp_name'];

            $extension = explode('.',$name);
            $extension = strtolower(end($extension));

            $key = rand().'-'.$oke;
            $tmp_file_name = "{$key}.{$extension}";
            $tmp_file_path = "assets/images/";
            $file->move($tmp_file_path,$tmp_file_name);
            // if(move_uploaded_file($tmp_name, $tmp_file_path)){
            $result =url('assets/images').'/'.$tmp_file_name;
            // }
        return $result;
     }
}
