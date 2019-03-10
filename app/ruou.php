<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruou extends Model
{
    protected $table='ruou';
    protected $fillable = [
        'TenRuou','AnhRuou','SoLuong','Mota','DonGia',
    ];


}
