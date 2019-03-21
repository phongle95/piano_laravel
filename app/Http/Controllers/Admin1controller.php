<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSanPham;
use App\sanpham;
use App\Http\Requests\sanphamrequest;
use App\Http\Requests\SPRequest;
use App\KhachHang;
use App\menu;
use App\Http\Requests\khachHangRequest;
use Illuminate\Support\Facades\Auth;


class Admin1controller extends Controller
{


     //get danh sách loại sản phẩm
     public function getDanhSachLoai(){
        $loaisanpham = LoaiSanPham::all();
        return view('PageAdmin1.loaisanpham.danhsach',['loaisanpham'=>$loaisanpham]);
    }

    //get thêm loại sản phẩm
    public function getThemLoai(){
        return view('PageAdmin1.loaisanpham.them');
    }

    //post thêm loại sản phẩm
    public function postThemLoai(Request $request){
        $this->validate($request,
        [
            'tenSP'=>'required|min:3|max:50'
        ],
        [
            'tenSP.required'=>'Bạn chưa nhập tên thể loại',
            'tenSP.min'=>'Tên sản phẩm phải có độ dài trên 3 kí tự',
            'tenSP.max'=>'Tên sản phẩm phải có độ dài dưới 50 kí tự'
        ]);

        $loaisanpham = new LoaiSanPham;
        $loaisanpham->tenSP = $request->tenSP;
        $loaisanpham->save();
        return redirect(route('PageAdmin1.loaisanpham.danhsach'))->with('thongbao','Thêm thành công');
    }

    //get sửa loại sản phẩm
    public function getSuaLoai($id){
        $loaisanpham = LoaiSanPham::find($id);
        return view('PageAdmin1.loaisanpham.sua',['loaisanpham'=>$loaisanpham]);

    }

    //post sửa loại sản phẩm
    public function postSuaLoai(Request $request,$id){
        $loaisanpham = LoaiSanPham::find($id);
        $loaisanpham->tenSP = $request->tenSP;
        $loaisanpham->save();
        return redirect(route('PageAdmin1.loaisanpham.danhsach'))->with('thongbao','Sửa thành công');
    }

    //xóa loại sản phẩm
    public function getXoa($id){
        $loaisanpham = LoaiSanPham::find($id);
        $loaisanpham->delete();
        return redirect(route('PageAdmin1.loaisanpham.danhsach'))->with('xoa','Xóa thành công');
    }



    // get orderby san phẩm
    public function getDanhSach(){
        $sanpham = sanpham::orderBy('id','DESC')->get();
        return view('PageAdmin1.sanpham.danhsach',['sanpham'=>$sanpham]);
    }

    //get Trang thêm sản phẩm
    public function getThem(){
        $loaisanpham = LoaiSanPham::all();
        return view('PageAdmin1.sanpham.them',['loaisanpham'=>$loaisanpham]);

    }

    //post thêm sản phẩm upload hình ảnh trong app/file
    public function postThem(sanphamrequest $request){
        $sanpham = new sanpham;
        $sanpham->tenSP = $request->tenSP;
        $sanpham->title = $request->title;
        $sanpham->description = $request->description;
        $sanpham->keyword = $request->keyword;
        $sanpham->gia = $request->gia;
        $sanpham->tomTat = $request->tomTat;
        $sanpham->MTSP = $request->MTSP;
        $sanpham->TSKT = $request->TSKT;
        $sanpham->maSP = $request->maSP;

        $file = $request->file('img');

        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            $sanpham->img=$img;
        }
        else{
            $sanpham->img="defau.png";
        }

        $sanpham->save();
        return redirect(route('PageAdmin1.sanpham.danhsach'))->with('thongbao','Thêm thành công');
    }

    //get trang sửa sản phẩm
    public function getSua($id){
        $loaisanpham = LoaiSanPham::all();
        $sanpham = sanpham::find($id);
        return view('PageAdmin1.sanpham.sua',['sanpham'=>$sanpham,'loaisanpham'=>$loaisanpham]);
        // echo $id;
        // echo $sanpham;
    }

    //post trang sửa sản phẩm
    public function postSua(SPRequest $request,$id){
        $sanpham = sanpham::find($id);
        $sanpham->tenSP = $request->tenSP;
        $sanpham->title = $request->title;
        $sanpham->description = $request->description;
        $sanpham->keyword = $request->keyword;
        $sanpham->gia = $request->gia;
        $sanpham->tomTat = $request->tomTat;
        $sanpham->MTSP = $request->MTSP;
        $sanpham->TSKT = $request->TSKT;
        $sanpham->maSP = $request->maSP;

        $file = $request->file('img');

        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            unlink(public_path()."/upload/".$sanpham->img);
            $sanpham->img=$img;
        }


        $sanpham->save();
        return redirect(route('PageAdmin1.sanpham.danhsach'))->with('thongbao','Sửa thành công');

    }

    //get xóa sản phẩm
    public function getxoaSP($id){
        $sanpham = sanpham::find($id);
        $sanpham->delete();
        return redirect(route('PageAdmin1.sanpham.danhsach'))->with('xoa','Xóa thành công');
    }


    // danh sach menu
    public function getDanhSachMenu(){
        $menu = menu::all();
        return view('PageAdmin1.menu.danhsach',['menu'=>$menu]);
    }

    // public function getThemMenu(){
    //     return view('PageAdmin.menu.them');
    // }

    // public function postThemMenu(Request $request){

    //     $menu = new menu;
    //     $menu->tenMenu = $request->tenMenu;
    //     $menu->noiDung = $request->noiDung;
    //     $menu->save();
    //     return redirect(route('PageAdmin.menu.danhsach'));
    // }

    public function getSuaMenu($id){
        $menu = menu::find($id);
        return view('PageAdmin1.menu.sua',['menu'=>$menu]);
    }

    public function postSuaMenu(Request $request,$id){
        $menu = menu::find($id);
        $menu->tenMenu = $request->tenMenu;
        $menu->noiDung = $request->noiDung;

        $menu->save();
        return redirect(route('PageAdmin1.menu.danhsach'))->with('thongbao','Sửa thành công');
    }






    public function getDanhSachKhachHang(){
        $khachhang = KhachHang::all();
        return view('PageAdmin1.khachhang.danhsach',['khachhang'=>$khachhang]);
    }

    public function getThemKhachHang(){

        return view('PageAdmin1.khachhang.them');
    }

    public function postThemKhachHang(khachHangRequest $request){
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
        return redirect(route('PageAdmin1.khachhang.danhsach'))->with('thongbao','Thêm thành công');
    }

    public function getSuaKhachHang($id){
        $khachhang = KhachHang::find($id);
        return view('PageAdmin1.khachhang.sua',['khachhang'=>$khachhang]);
    }


    public function postSuaKhachHang(Request $request,$id){
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
        return redirect(route('PageAdmin1.khachhang.danhsach'))->with('thongbao','Sửa thành công');

    }

    public function getXoaKhachHang($id){
        $khachhang = KhachHang::find($id);
        $khachhang->delete();
        return redirect(route('PageAdmin1.khachhang.danhsach'))->with('xoa','Xóa thành công');
    }



    //login logout

    public function login(){
        return view('PageAdmin1.login.login');
    }

    public function postLogin(Request $request){

        if (Auth::attempt(['username' =>$request->username, 'password' =>$request->password])) {
            $value = $request->session()->put('username',$request->username);
            return redirect(route('PageAdmin1.trangchu'));

        }
        else {

            return redirect(route('PageAdmin1.login.login'))->with('thongbao','Tên tài khoản hặc mật khẩu không chính sác mời nhập lại');
        }
    }



    public function logout(){

        Auth::logout();
        return redirect()->route('PageAdmin1.login.login');
    }


    public function admin(){
        return view('PageAdmin1.trangchu');
    }


}
