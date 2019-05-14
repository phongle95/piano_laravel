<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\KhachHang;
use App\menu;
use App\news;

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
        return view('Pages.suachua',['menu'=>$menu]);
    }

    public function TCSK(){
        $menu = menu::find(4);
        return view('Pages.tochucsukien',['menu'=>$menu]);
    }

    public function CTNC(){
        $menu = menu::find(5);
        return view('Pages.chothuenhaccu',['menu'=>$menu]);
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

     //tìm kiếm sản phẩm
     public function timkiem(Request $request){
        $tukhoa = $request->tukhoa;
        $ketqua = sanpham::where('tenSP','like','%'.$tukhoa.'%')->paginate(8);
        if(count($ketqua)>0){
            toastr()->success("Đã tìm thấy kết quả : $tukhoa");
        }
        else {
            toastr()->error("Không tìm thấy kết quả cho : $tukhoa");
        }
        return view('Pages.timkiem',['ketqua'=>$ketqua]);
    }
    // tin tức
    public function tintuc($slug,$id){
        $tin = news::where('maLoaiTin',$id)->orderBy('id','DESC')->paginate(4);
        return view('Pages.tintuc',['tin'=>$tin]);
    }

    public function chiTietNews($slug ,$id,$ma){

        $chitiet = news::find($id);
        $news = news::where('maLoaiTin',$ma)->orderBy('id','DESC')->limit(4)->get();
        return view('Pages.detailnews',['chitiet'=>$chitiet,'news'=>$news]);
    }

     //tìm kiếm tin tức
     public function search(Request $request){
        $tukhoa = $request->tukhoa;
        $ketqua = news::where('tieuDe','like','%'.$tukhoa.'%')->orwhere('tomTat','like','%'.$tukhoa.'%')->paginate(4);
        if(count($ketqua)>0){
            toastr()->success("Đã tìm thấy kết quả : $tukhoa");
        }
        else {
            toastr()->error("Không tìm thấy kết quả cho : $tukhoa");
        }
        return view('Pages.search',['ketqua'=>$ketqua]);
    }

}
