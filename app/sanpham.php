<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'tenSP','gia','img','tomTat','MTSP','TSKT','maSP',
    ];

    public function LoaiSanPham()
    {
        return $this->belongsTo('App\LoaiSanPham', 'maSP');
    }
}
