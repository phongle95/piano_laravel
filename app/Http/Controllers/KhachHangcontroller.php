<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
use App\menu;
use App\Http\Requests\khachHangRequest;
class KhachHangcontroller extends Controller
{
    public function getDanhSach(){
        $menu = menu::all();
        return view('PageAdmin.menu.danhsach',['menu'=>$menu]);
    }

    public function getThem(){
        return view('PageAdmin.menu.them');
    }

    public function postThem(Request $request){

        $menu = new menu;
        $menu->tenMenu = $request->tenMenu;
        $menu->noiDung = $request->noiDung;
        $menu->save();
        return redirect(route('PageAdmin.menu.danhsach'));
    }

    public function getSua($id){
        $menu = menu::find($id);
        return view('PageAdmin.menu.sua',['menu'=>$menu]);
    }

    public function postSua(Request $request,$id){
        $menu = menu::find($id);
        $menu->tenMenu = $request->tenMenu;
        $menu->noiDung = $request->noiDung;

        $menu->save();
        return redirect(route('PageAdmin.menu.danhsach'));
    }







    public function getDanhSachKhach(){
        $khachhang = KhachHang::all();
        return view('PageAdmin.khachhang.danhsach',['khachhang'=>$khachhang]);
    }

    public function getThemKhach(){

        return view('PageAdmin.khachhang.them');
    }

    public function postThemKhach(khachHangRequest $request){
        $khachhang = new KhachHang;
        $khachhang->tenKH = $request->tenKH;
        $khachhang->diaChi = $request->diaChi;
        $khachhang->danhGia = $request->danhGia;

        $file = $request->file('img');

        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            $khachhang->img=$img;
        }
        else{
            $khachhang->img="defau.png";
        }

        $khachhang->save();
        return redirect(route('PageAdmin.khachhang.danhsach'));
    }

    public function getSuaKhach($id){
        $khachhang = KhachHang::find($id);
        return view('PageAdmin.khachhang.suakhachhang',['khachhang'=>$khachhang]);
    }


    public function postSuaKhach(khachHangRequest $request,$id){
        $khachhang = KhachHang::find($id);
        $khachhang->tenKH = $request->tenKH;
        $khachhang->diaChi = $request->diaChi;
        $khachhang->danhGia = $request->danhGia;

        $file = $request->file('img');

        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            unlink(public_path()."/upload/".$khachhang->img);
            $khachhang->img=$img;
        }


        $khachhang->save();
        return redirect(route('PageAdmin.khachhang.danhsach'));

    }

    public function getXoa($id){
        $khachhang = KhachHang::find($id);
        $khachhang->delete();
        return redirect(route('PageAdmin.khachhang.danhsach'));
    }
}
