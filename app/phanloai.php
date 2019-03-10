<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phanloai extends Model
{
    protected $table='phanloai';
    protected $fillable = [
        'TenLoai',
    ];
}
