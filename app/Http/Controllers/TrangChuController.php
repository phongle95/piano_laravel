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
        // echo 'phuong'.$slug.'phong'.$id;
        $piano = sanpham::where('maSP',1)->with('LoaiSanPham')->orderBy('id','DESC')->limit(6)->get();
        $chitiet = sanpham::find($id);
        return view('Pages.chitiet',['chitiet'=>$chitiet,'piano'=>$piano]);
    }

    public function sanpham(){
        $upright = sanpham::where('maSP',1)->with('LoaiSanPham')->orderBy('id','DESC')->limit(6)->get();
        $grand = sanpham::where('maSP',3)->with('LoaiSanPham')->orderBy('id','DESC')->limit(6)->get();
        $guitar = sanpham::where('maSP',2)->with('LoaiSanPham')->orderBy('id','DESC')->limit(6)->get();
        return view('Pages.sanpham',['upright'=>$upright,'grand'=>$grand,'guitar'=>$guitar]);
    }

    public function giaoduc(){
        return view('Pages.giaoduc');
    }

    public function lienhe(){
        return view('Pages.lienhe');
    }

    public function gioithieu(){
        return view('Pages.gioithieu');
    }
    public function video(){
        return view('Pages.video');
    }

    public function timkiem(Request $request){
        $tukhoa = $request->tukhoa;
        $ketqua = sanpham::where('tenSP','like','%'.$tukhoa.'%')->get();

        return view('Pages.timkiem',['ketqua'=>$ketqua,'tukhoa'=>$tukhoa,])->with('kq','Không có kết quả');
    }


}
