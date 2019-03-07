<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class khachhang_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khachhang')->insert([
            [
                'TenKH' => 'Nhiên',
                'DiaChi' => '128 abc',
                'SDT' => '0337247773',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'TenKH' => 'Viên',
                'DiaChi' => '128 abc',
                'SDT' => '0337247771',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'TenKH' => 'Nhện',
                'DiaChi' => '128 abc',
                'SDT' => '0337247777',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
