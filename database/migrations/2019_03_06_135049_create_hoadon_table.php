<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->increments('MaHD');
            $table->date('NgayLap');
            $table->integer('MaKH')->unsigned();
            $table->integer('MaNV')->unsigned();
            $table->foreign('MaKH')->references('MaKH')->on('khachhang')->onUpdate('cascade');
            $table->foreign('MaNV')->references('MaNV')->on('users')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
}
