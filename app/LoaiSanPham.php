<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = 'loaisanpham';
    protected $primaryKey = 'maSP';
    public $timestamps = false;

     protected $fillable = [
        'tenSP',
    ];

    public function sanpham()
    {
       return $this->hasOne('App\sanpham');
    }
}
