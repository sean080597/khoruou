<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruou extends Model
{
    protected $table='ruou';
    protected $primaryKey = 'MaRuou';
    protected $fillable = [
        'TenRuou','AnhRuou','SoLuong','Mota','DonGia','MaNSX', 'MaLoai', 'MaNCC'
    ];

    // public function NhaSanXuat()
    // {
    //     return $this->belongsTo('App\nhasanxuat', 'MaNSX','MaNSX');
    // }

}
