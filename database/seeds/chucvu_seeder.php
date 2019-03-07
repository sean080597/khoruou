<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class chucvu_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chucvu')->insert([
            [
                'MaCV' => 'NV',
                'TenCV' => 'Nhân Viên',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'MaCV' => 'GD',
                'TenCV' => 'Giám Đốc',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'MaCV' => 'QL',
                'TenCV' => 'Quản Lý',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
