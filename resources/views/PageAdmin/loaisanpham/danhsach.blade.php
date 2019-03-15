@extends('Admin.master')
@section('noidung')
<br>
<h2 style="text-align:center;font-weight: 600;">Danh sách loại sản phẩm</h2>
@if (session('thongbao'))
<div style="color:green;font-weight: 400; text-align:center">
    {{ session('thongbao') }}
</div>

@endif

@if (session('xoa'))
<div style="color:red;font-weight: 400; text-align:center">
    {{ session('xoa') }}
</div>

@endif
<!-- End Navbar -->
<div class="content">
<div class="container-fluid">
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header card-header-primary">
            <h4 class="card-title ">LOẠI SẢN PHẨM</h4>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <th style="text-align:left;font-weight: 600;">
                        MÃ SẢN PHẨM
                     </th>
                     <th style="text-align:left;font-weight: 600;">
                        TÊN SẢN PHẨM
                     </th>
                     <th style="text-align:left;font-weight: 600;">
                        SỬA
                     </th>
                     <th style="text-align:left;font-weight: 600;">
                        XÓA
                     </th>
                  </thead>
                  <a href="{{ route('PageAdmin.loaisanpham.them') }}" style="margin-left:85%" class="btn btn-primary btn-round">Thêm loại sản phẩm</a>
                  <tbody>
                      @foreach ($loaisanpham as $lsp )


                     <tr>
                        <td style="text-align:left;font-weight: 500;">
                           {{ $lsp->maSP }}
                        </td>
                        <td style="text-align:left;font-weight: 500;">
                            {{ $lsp->tenSP }}
                        </td>
                        <td style="text-align:left;font-weight: 500;">
                           <a href="{{ route('PageAdmin.loaisanpham.sua',$lsp->maSP) }}" class="btn btn-primary btn-round">Sửa</a>
                        </td>
                        <td style="text-align:left;font-weight: 500;">
                           <a href="{{ route('PageAdmin.loaisanpham.xoa',$lsp->maSP) }}" class="btn btn-primary btn-round">Xóa</a>
                        </td>
                     </tr>

                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
