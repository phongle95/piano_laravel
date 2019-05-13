<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiSanPham;
use App\sanpham;
use App\KhachHang;
use App\menu;
use App\loaitin;
use App\news;
use App\Http\Requests\sanphamrequest;
use App\Http\Requests\SPRequest;
use App\Http\Requests\TinRequest;
use App\Http\Requests\TinSuaRequest;
use App\Http\Requests\khachHangRequest;
use App\Http\Requests\KhachHangSuaRequest;
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

    // get sửa menu
    public function getSuaMenu($id){
        $menu = menu::find($id);
        return view('PageAdmin1.menu.sua',['menu'=>$menu]);
    }

    // post sửa menu
    public function postSuaMenu(Request $request,$id){
        $menu = menu::find($id);
        $menu->tenMenu = $request->tenMenu;
        $menu->noiDung = $request->noiDung;

        $menu->save();
        return redirect(route('PageAdmin1.menu.danhsach'))->with('thongbao','Sửa thành công');
    }

    // get danh sách khách hàng
    public function getDanhSachKhachHang(){
        $khachhang = KhachHang::all();
        return view('PageAdmin1.khachhang.danhsach',['khachhang'=>$khachhang]);
    }

    // get thêm khách hàng
    public function getThemKhachHang(){

        return view('PageAdmin1.khachhang.them');
    }

    // post thêm khách hàng
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

    // get sửa khách hàng
    public function getSuaKhachHang($id){
        $khachhang = KhachHang::find($id);
        return view('PageAdmin1.khachhang.sua',['khachhang'=>$khachhang]);
    }

    // post sửa khách hàng
    public function postSuaKhachHang(KhachHangSuaRequest $request,$id){
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

    // xóa khách hàng
    public function getXoaKhachHang($id){
        $khachhang = KhachHang::find($id);
        $khachhang->delete();
        return redirect(route('PageAdmin1.khachhang.danhsach'))->with('xoa','Xóa thành công');
    }

    // danh sách loại tin
    public function listLoaiTin(){
        $loaitin = loaitin::all();
        return view('PageAdmin1.loaitin.danhsach',['loaitin'=>$loaitin]);
    }

    // get thêm loại tin
    public function getThemLoaiTin(){
        return view('PageAdmin1.loaitin.them');
    }

    // post thêm loai tin
    public function posthemLoaiTin(Request $request){
        $loaitin  = new loaitin;
        $loaitin->tenLoaiTin = $request->tenLoaiTin;
        $loaitin->save();
        return redirect(route('PageAdmin1.loaitin.danhsach'))->with('thongbao','Thêm thành công');
    }

    // get sửa loại tin
    public function getSuaLoaiTin($id){
        $loaitin = loaitin::find($id);

        return view('PageAdmin1.loaitin.sua',['loaitin'=>$loaitin]);
    }

    // post sửa loại tin
    public function postSuaLoaiTin(Request $request,$id){
        $loaitin = loaitin::find($id);
        $loaitin->tenLoaiTin = $request->tenLoaiTin;
        $loaitin->save();
        return redirect(route('PageAdmin1.loaitin.danhsach'))->with('thongbao','Sửa thành công');
    }

    // xóa loại tin
    public function deleteLoaiTin($id){
        $loaitin = loaitin::find($id);
        $loaitin->delete();
        return redirect(route('PageAdmin1.loaitin.danhsach'))->with('xoa','Xóa thành công');
    }

    // tin tức
    public function getDanhSachTin(){
        $tin = news::orderBy('id','DESC')->get();
        $loaitin = loaitin::all();
        return view('PageAdmin1.tin.danhsach',['tin'=>$tin,'loaitin'=>$loaitin]);
    }

    public function getThemTin(){
        $loaitin = loaitin::all();
        return view('PageAdmin1.tin.them',['loaitin'=>$loaitin]);
    }

    public function postThemTin(TinRequest $request){

        $tin = new news;
        $tin->tieuDe = $request->tieuDe;
        $tin->tomTat = $request->tomTat;
        $tin->keyword = $request->keyword;
        $tin->date = $request->date;
        $tin->noiDung = $request->noiDung;
        $tin->maLoaiTin = $request->maLoaiTin;

        $file = $request->file('img');


        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            $tin->img=$img;
        }
        else{
            $tin->img="defau.png";
        }


        $tin->save();
        return redirect(route('PageAdmin1.tin.danhsach'))->with('thongbao','Thêm thành công');
    }

    public function getSuaTin($id){
        $loaitin = loaitin::all();
        $tin = news::find($id);
        return view('PageAdmin1.tin.sua',['tin'=>$tin,'loaitin'=>$loaitin]);
    }

    public function postSuaTin(TinSuaRequest $request,$id){
        $tin = news::find($id);
        $tin->tieuDe = $request->tieuDe;
        $tin->tomTat = $request->tomTat;
        $tin->keyword = $request->keyword;
        $tin->date = $request->date;
        $tin->noiDung = $request->noiDung;
        $tin->maLoaiTin = $request->maLoaiTin;

        $file = $request->file('img');
        if ($file !="") {
            $img = $file->store("/", ['disk'=>'upload']);
            unlink(public_path()."/upload/".$tin->img);
            $tin->img=$img;
        }
        $tin->save();
        return redirect(route('PageAdmin1.tin.danhsach'))->with('thongbao','Sửa thành công');
    }

    public function getXoaTin($id){
        $tin = news::find($id);
        unlink(public_path()."/upload/".$tin->img);
        $tin->delete();
        return redirect(route('PageAdmin1.tin.danhsach'))->with('xoa','Xóa thành công');
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
