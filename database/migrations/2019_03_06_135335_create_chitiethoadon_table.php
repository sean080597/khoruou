<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitiethoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->integer('MaHD')->unsigned();
            $table->integer('MaRuou')->unsigned();
            $table->integer('SoLuong')->unsigned();
            $table->primary(['MaHD','MaRuou']);
            $table->foreign('MaHD')->references('MaHD')->on('hoadon')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('MaRuou')->references('MaRuou')->on('ruou')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('chitiethoadon');
    }
}
