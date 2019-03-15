@extends('Admin.master')
@section('noidung')
<br>

<h2 style="text-align:center;font-weight: 600;">Danh sách sản phẩm</h2>

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
            <h4 class="card-title ">SẢN PHẨM</h4>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <th style="text-align:left;font-weight: 600;">
                        TÊN SẢN PHẨM
                     </th>
                     <th style="text-align:left;font-weight: 600;">
                        GIÁ SẢN PHẨM
                     </th>
                     <th style="text-align:left;font-weight: 600;">
                        HÌNH SẢN PHẨM
                     </th>
                     <th style="text-align:left;font-weight: 600;">
                       MÃ LOẠI SẢN PHẨM
                     </th>
                     <th style="text-align:left;font-weight: 600;">
                        SỬA
                     </th>
                     <th style="text-align:left;font-weight: 600;">
                        XÓA
                     </th>
                  </thead>
                  <a href="{{ route('PageAdmin.sanpham.them') }}" style="margin-left:85%" class="btn btn-primary btn-round">Thêm sản phẩm</a>
                  <tbody>
                      @foreach ($sanpham as $sp)

                     <tr>
                        <td style="text-align:left;font-weight: 500;">
                           {{ $sp->tenSP }}
                        </td>
                        <td style="text-align:left;font-weight: 500;color:red">
                                {{number_format($sp->gia) }}đ
                        </td>
                        <td style="text-align:left;font-weight: 500;">
                            <img src="/upload/{{ $sp->img }}" ald="salem" width="300px" height="250px">
                        </td>
                        <td style="text-align:left;font-weight: 500;">
                            {{ $sp->maSP }}
                        </td>
                        <td style="text-align:left;font-weight: 500;">
                           <a href="{{  route('PageAdmin.sanpham.sua',$sp->id) }}" class="btn btn-primary btn-round">Sửa</a>
                        </td>
                        <td style="text-align:left;font-weight: 500;">
                           <a href="{{  route('PageAdmin.sanpham.xoa',$sp->id) }}" class="btn btn-primary btn-round">Xóa</a>
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
