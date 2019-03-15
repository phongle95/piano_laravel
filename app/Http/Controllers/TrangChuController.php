<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;

class TrangChuController extends Controller
{
    public function trangchu(){
        $piano = sanpham::where('maSP',1)->with('LoaiSanPham')->orderBy('id','DESC')->limit(6)->get();
        $guitar = sanpham::where('maSP',2)->with('LoaiSanPham')->orderBy('id','DESC')->limit(6)->get();
        return view('Pages.trangchu',['piano'=>$piano,'guitar'=>$guitar]);
    }

    public function chitiet($slug, $id){
        $piano = sanpham::where('maSP',1)->with('LoaiSanPham')->orderBy('id','DESC')->limit(6)->get();
        $chitiet = sanpham::find($id);
        return view('Pages.chitiet',['chitiet'=>$chitiet,'piano'=>$piano]);
    }

    public function sanpham(){
        return view('Pages.sanpham');
    }


}
