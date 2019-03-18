@extends('Admin.master')
@section('noidung')
<br>

<h2 style="text-align:center;font-weight: 600;">Danh sách menu</h2>

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
            <h3 style="text-align:center;font-weight: 600;">Danh sách menu</h3>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <th style="text-align:left;font-weight: 600;">
                        TÊN MENU
                     </th>

                     <th style="text-align:left;font-weight: 600;">
                        SỬA
                     </th>
                     {{--  <th style="text-align:left;font-weight: 600;">
                        XÓA
                     </th>  --}}
                  </thead>
                  {{--  <a href="{{ route('PageAdmin.menu.them') }}" style="margin-left:85%" class="btn btn-primary btn-round">Thêm</a>  --}}
                  <tbody>
                      @foreach ($menu as $mn)

                     <tr>
                        <td style="text-align:left;font-weight: 500;">
                           {{ $mn->tenMenu }}
                        </td>

                        <td style="text-align:left;font-weight: 500;">
                           <a href="{{  route('PageAdmin.menu.sua',$mn->id) }}" class="btn btn-primary btn-round">Sửa</a>
                        </td>
                        {{--  <td style="text-align:left;font-weight: 500;">
                           <a href="{{  route('PageAdmin.sanpham.xoa',$sp->id) }}" class="btn btn-primary btn-round">Xóa</a>
                        </td>  --}}
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
