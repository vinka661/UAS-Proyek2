<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaproduk');
            $table->integer('harga');
            $table->string('satuan');
            $table->string('status');
            $table->integer('stok');
            $table->unsignedInteger('id_jenis');
            $table->timestamps();
            $table->foreign('id_jenis')->references('id')->on('jenisproduks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
