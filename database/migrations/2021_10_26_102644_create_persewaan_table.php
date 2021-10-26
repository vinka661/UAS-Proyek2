<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersewaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persewaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('qty');
            $table->datetime('tanggal_sewa');
            $table->integer('harga_total');
            $table->integer('bayar');
            $table->integer('kembalian');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_produk');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_produk')->references('id')->on('produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persewaan');
    }
}
