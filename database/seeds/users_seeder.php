<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'TenNV' => 'Nhi',
                'email' => '128bc@gmail.com',
                'password' => '1',
                'SoDienThoai' => '0337247773',
                'DChi' => '82 nguyễn xí',
                'MaCV' => 'NV',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'TenNV' => 'Nhím',
                'email' => '128bcd@gmail.com',
                'password' => '2',
                'SoDienThoai' => '0337247773',
                'DChi' => '823 nguyễn xí',
                'MaCV' => 'QL',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'TenNV' => 'Nhã',
                'email' => '128b@gmail.com',
                'password' => '3',
                'SoDienThoai' => '0337247774',
                'DChi' => '8 nguyễn xí',
                'MaCV' => 'GD',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
