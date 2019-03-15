@extends('Admin.master')
@section('noidung')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 style="text-align:center;font-weight: 600" class="card-title">Sửa loại sản phẩm</h4>
               </div>
               <div class="card-body">
                    {{--  @if (count($error)>0)
                    <div style="color:red;font-weight: 400">
                        @foreach ($error->all() as $err)
                            {{ $err }}<br>
                        @endforeach
                    </div>  --}}

                    {{--  @if (session('thongbao'))
                    <div style="color:red;font-weight: 400">
                      {{ session('thongbao') }}
                    </div>

                   @endif  --}}
                   <p style="color:black;font-weight: 400">{{ $loaisanpham->tenSP }}</p>
                  <form action="" method="POST">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                     <br>
                     <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="bmd-label-floating">Tên sản phẩm</label>
                              <input type="text" class="form-control" name="tenSP" value="{{ $loaisanpham->tenSP }}">
                           </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary pull-right">Sửa loại sản phẩm</button>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
