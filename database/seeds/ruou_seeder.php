<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ruou_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruou')->insert([
            [
                'TenRuou' => 'Rượu Bàu Đá',
                'AnhRuou' => 'http://file.vforum.vn/hinh/2016/08/hinh-anh-chai-ruu-dep-12.jpg',
                'SoLuong' => '2',
                'MoTa' => '2qưedqwedf',
                'DonGia' => '300000',
                'MaNSX' => '2',
                'MaLoai' => '1',
                'MaNCC' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'TenRuou' => 'Rượu Chivas',
                'AnhRuou' => 'http://4.bp.blogspot.com/-pxJPyugRfBQ/VXsC7BXfp1I/AAAAAAAAALs/3zKyfAAY-iI/s640/54954125.jpg',
                'SoLuong' => '2',
                'MoTa' => '2qưedqwedf',
                'DonGia' => '200000',
                'MaNSX' => '4',
                'MaLoai' => '2',
                'MaNCC' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'TenRuou' => 'Rượu Russian',
                'AnhRuou' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0b9ozFEqlhb8ASZCRfj2NyH4PuGc6A1CJkNsp3JBGpNQie29C2g',
                'SoLuong' => '2',
                'MoTa' => '2qưedqwedf',
                'DonGia' => '200000',
                'MaNSX' => '1',
                'MaLoai' => '3',
                'MaNCC' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],          
        ]);
    }
}
