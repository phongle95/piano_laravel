@extends('Admin2.master')
@section('noidung')
<div class="row">
   <div class="col-md-12">
      <!-- DATA TABLE -->
      <div class="card">
         <div class="card-header">
            <strong>Sửa Loại Tin</strong>
         </div>
         <div class="card-body card-block">
            <form action="" method="POST" class="form-horizontal">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tên Loại Tin </label><br>
                     <input type="text" id="text-input" name="tenLoaiTin" value="{{  $loaitin->tenLoaiTin }}" placeholder="Nhập tên loại tin" class="form-control">
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-fw">
                  Sửa
                  </button>
                  <a href="{{ route('PageAdmin1.loaitin.danhsach') }}" class="btn btn-info btn-fw">
                  Quay về
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
