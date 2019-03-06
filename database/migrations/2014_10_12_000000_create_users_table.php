<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('MaNV');
            $table->string('TenNV');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('MatKhau');
            $table->char('SoDienThoai',10);
            $table->string('DChi',200);
            $table->char('MaCV',20);
            $table->foreign('MaCV')->references('MaCV')->on('chucvu')->onUpdate('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
