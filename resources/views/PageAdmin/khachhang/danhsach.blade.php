@extends('Admin.master')
@section('noidung')
<br>

<h2 style="text-align:center;font-weight: 600;">Danh sách khách hàng đánh giá</h2>

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
            <h3 style="text-align:center;font-weight: 600;">Khách hàng</h3>
         </div>
         <div class="card-body">
            <div class="table-rekhonsive">
               <table class="table">
                  <thead>
                     <th style="text-align:left;font-weight: 600;">
                        TÊN KHÁCH HÀNG
                     </th>
                     <th style="text-align:left;font-weight: 600;">
                        HÌNH KHÁCH HÀNG
                     </th>
                     {{--  <th style="text-align:left;font-weight: 600;">
                       ĐỊA CHỈ
                     </th>  --}}
                     <th style="text-align:left;font-weight: 600;">
                      DÁNH GIÁ
                     </th>

                     <th style="text-align:left;font-weight: 600;">
                        SỬA
                     </th>
                     <th style="text-align:left;font-weight: 600;">
                        XÓA
                     </th>
                  </thead>
                  <a href="{{ route('PageAdmin.khachhang.them') }}" style="margin-left:85%" class="btn btn-primary btn-round">Thêm Đánh Giá</a>
                  <tbody>
                      @foreach ($khachhang as $kh)

                     <tr>
                        <td style="text-align:left;font-weight: 500;">
                           {{ $kh->tenKH }}
                        </td>

                        <td style="text-align:left;font-weight: 500;">
                            <img src="/upload/{{ $kh->img }}" ald="salem" width="300px" height="250px">
                        </td>
                        {{--  <td style="text-align:left;font-weight: 500;">
                            {{ $kh->diaChi }}
                        </td>  --}}
                        <td style="text-align:left;font-weight: 500;">
                            {{ $kh->danhGia }}
                        </td>
                        <td style="text-align:left;font-weight: 500;">
                           <a href="{{ route('PageAdmin.khachhang.suakhachhang',$kh->id) }}" class="btn btn-primary btn-round">Sửa</a>
                        </td>
                        <td style="text-align:left;font-weight: 500;">
                           <a href="{{ route('PageAdmin.khachhang.xoa',$kh->id) }}" class="btn btn-primary btn-round">Xóa</a>
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
