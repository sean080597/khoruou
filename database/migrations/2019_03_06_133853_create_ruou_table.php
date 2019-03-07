<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuouTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruou', function (Blueprint $table) {
            $table->increments('MaRuou');
            $table->char('TenRuou');
            $table->string('AnhRuou')->nullable();
            $table->integer('SoLuong')->unsigned();
            $table->text('Mota')->nullable();
            $table->integer('DonGia')->unsigned();
            $table->integer('MaNSX')->unsigned();
            $table->integer('MaLoai')->unsigned();
            $table->integer('MaNCC')->unsigned();
            $table->foreign('MaNSX')->references('MaNSX')->on('nhasanxuat')->onUpdate('cascade');
            $table->foreign('MaLoai')->references('MaLoai')->on('phanloai')->onUpdate('cascade');
            $table->foreign('MaNCC')->references('MaNCC')->on('nhacungcap')->onUpdate('cascade');
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
        Schema::dropIfExists('ruou');
    }
}
