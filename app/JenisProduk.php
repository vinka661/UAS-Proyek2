<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    public $table = "jenisproduks";
    protected $fillable = ['namajenis'];
}
