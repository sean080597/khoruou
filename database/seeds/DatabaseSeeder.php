<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(chucvu_seeder::class);
        $this->call(nhacungcap_seeder::class);
        $this->call(nhasanxuat_seeder::class);
        $this->call(phanloai_seeder::class);
        $this->call(khachhang_seeder::class);
        $this->call(ruou_seeder::class);
        $this->call(users_seeder::class);
    }
}
