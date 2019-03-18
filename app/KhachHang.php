<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{

    protected $table = 'khachhang';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'tenKH','diaChi','danhGia',
    ];
}
