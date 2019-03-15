<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoaiSanPhamcontroller extends Controller
{
    public function getDanhSach(){
        return view('PageAdmin.loaisanpham');
    }

    public function getThem(){
      return view('PageAdmin.themloaisanpham');
    }
}
