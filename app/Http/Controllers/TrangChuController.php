<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\KhachHang;
use App\menu;

class TrangChuController extends Controller
{
    public function trangchu(){
        $piano = sanpham::where('maSP',1)->with('LoaiSanPham')->orderBy('id','DESC')->limit(6)->get();
        $guitar = sanpham::where('maSP',2)->with('LoaiSanPham')->orderBy('id','DESC')->limit(6)->get();

        $khachhang = KhachHang::all();
        return view('Pages.trangchu',['piano'=>$piano,'guitar'=>$guitar,'khachhang'=>$khachhang]);
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
        $digital = sanpham::where('maSP',4)->with('LoaiSanPham')->orderBy('id','DESC')->limit(6)->get();
        $khachhang = KhachHang::all();
        return view('Pages.sanpham',['upright'=>$upright,'grand'=>$grand,'guitar'=>$guitar,'digital'=>$digital,'khachhang'=>$khachhang]);
    }

    public function giaoduc(){
        $menu = menu::find(2);
        return view('Pages.giaoduc',['menu'=>$menu]);
    }

    public function suachua(){
        $menu = menu::find(3);
        return view('Pages.giaoduc',['menu'=>$menu]);
    }

    public function TCSK(){
        $menu = menu::find(4);
        return view('Pages.giaoduc',['menu'=>$menu]);
    }

    public function CTNC(){
        $menu = menu::find(5);
        return view('Pages.giaoduc',['menu'=>$menu]);
    }

    public function lienhe(){
        return view('Pages.lienhe');
    }

    public function gioithieu(){
        $menu = menu::find(1);
        return view('Pages.gioithieu',['menu'=>$menu]);
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
