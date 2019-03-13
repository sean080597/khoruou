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
                'name' => 'Nhi',
                'email' => '128bc@gmail.com',
                'password' => bcrypt('1'),
                'SoDienThoai' => '0337247773',
                'DChi' => '82 nguyễn xí',
                'MaCV' => 'NV',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nhím',
                'email' => '128bcd@gmail.com',
                'password' => bcrypt('2'),
                'SoDienThoai' => '0337247773',
                'DChi' => '823 nguyễn xí',
                'MaCV' => 'QL',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nhã',
                'email' => '128b@gmail.com',
                'password' => bcrypt('3'),
                'SoDienThoai' => '0337247774',
                'DChi' => '8 nguyễn xí',
                'MaCV' => 'GD',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nhã',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'SoDienThoai' => '0337247774',
                'DChi' => '8 nguyễn xí',
                'MaCV' => 'GD',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
