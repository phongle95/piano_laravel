@extends('Admin.master')

@section('noidung')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-9">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 style="text-align:center;font-weight: 600" class="card-title">Thêm đánh giá</h4>


               </div>
               @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               <div class="card-body">
                  <form action="{{ route('PageAdmin.khachhang.them') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="row">
                                <div class="col-md-12">
                                   <div class="form-group">
                                      <label class="bmd-label-floating" style="color:black;font-weight: 600">Tên Khách Hàng</label>
                                      <input type="text" class="form-control" name="tenKH" value="{{ old('tenKH') }}">
                                   </div>
                                </div>
                             </div>
                             <br><br>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <label class="bmd-label-floating" style="color:black;font-weight: 600">Chọn hình</label>
                                         <input type="file" style="width:200px" name="img" value="{{ old('img') }}">
                                    </div>
                                 </div>
                                 <br><br>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="bmd-label-floating" style="color:black;font-weight: 600">Địa Chỉ</label>
                                          <input type="text" class="form-control" name="diaChi" value="{{ old('diaChi') }}">
                                       </div>
                                    </div>
                                 </div>
                            <br><br>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <div class="form-group">
                                             <label class="bmd-label-floating" style="color:black;font-weight: 600">Đánh Giá</label>
                                             <textarea class="form-control" rows="5" name="danhGia">{{ old('danhGia') }}</textarea>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                               <br>






                     <button type="submit" class="btn btn-primary pull-right">Thêm</button>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
