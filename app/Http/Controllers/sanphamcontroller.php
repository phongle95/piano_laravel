<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\LoaiSanPham;
use App\sanpham;
use App\Http\Requests\sanphamrequest;
use App\Http\Requests\SPRequest;

class sanphamcontroller extends Controller
{


    //get danh sách loại sản phẩm
    public function getDanhSachLoai(){
        $loaisanpham = LoaiSanPham::all();
        return view('PageAdmin.loaisanpham.danhsach',['loaisanpham'=>$loaisanpham]);
    }

    //get thêm loại sản phẩm
    public function getThemLoai(){
        return view('PageAdmin.loaisanpham.them');
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
        return redirect(route('PageAdmin.loaisanpham.them'))->with('thongbao','Thêm thành công');
    }

    //get sửa loại sản phẩm
    public function getSuaLoai($id){
        $loaisanpham = LoaiSanPham::find($id);
        return view('PageAdmin.loaisanpham.sua',['loaisanpham'=>$loaisanpham]);

    }

    //post sửa loại sản phẩm
    public function postSuaLoai(Request $request,$id){
        $loaisanpham = LoaiSanPham::find($id);
        $loaisanpham->tenSP = $request->tenSP;
        $loaisanpham->save();
        return redirect(route('PageAdmin.loaisanpham.danhsach'))->with('thongbao','Sửa thành công');
    }

    //xóa loại sản phẩm
    public function getXoa($id){
        $loaisanpham = LoaiSanPham::find($id);
        $loaisanpham->delete();
        return redirect(route('PageAdmin.loaisanpham.danhsach'))->with('xoa','Xóa thành công');
    }








    // get orderby san phẩm
    public function getDanhSach(){
        $sanpham = sanpham::orderBy('id','DESC')->get();
        return view('PageAdmin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }

    //get Trang thêm sản phẩm
    public function getThem(){
        $loaisanpham = LoaiSanPham::all();
        return view('PageAdmin.sanpham.them',['loaisanpham'=>$loaisanpham]);

    }

    //post thêm sản phẩm upload hình ảnh trong app/file
    public function postThem(sanphamrequest $request){
        $sanpham = new sanpham;
        $sanpham->tenSP = $request->tenSP;
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
        return redirect(route('PageAdmin.sanpham.danhsach'));
    }

    //get trang sửa sản phẩm
    public function getSua($id){
        $loaisanpham = LoaiSanPham::all();
        $sanpham = sanpham::find($id);
        return view('PageAdmin.sanpham.sua',['sanpham'=>$sanpham,'loaisanpham'=>$loaisanpham]);
        // echo $id;
        // echo $sanpham;
    }

    //post trang sửa sản phẩm
    public function postSua(SPRequest $request,$id){
        $sanpham = sanpham::find($id);
        $sanpham->tenSP = $request->tenSP;
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
        return redirect(route('PageAdmin.sanpham.danhsach'));

    }

    //get xóa sản phẩm
    public function getxoaSP($id){
        $sanpham = sanpham::find($id);
        $sanpham->delete();
        return redirect(route('PageAdmin.sanpham.danhsach'))->with('xoa','Xóa thành công');
    }
}



