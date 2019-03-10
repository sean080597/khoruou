<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $fillable = [
        'TenKH','DiaChi','SDT',
    ];
}
