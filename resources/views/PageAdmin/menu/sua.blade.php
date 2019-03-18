@extends('Admin.master')

@section('noidung')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-9">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 style="text-align:center;font-weight: 600" class="card-title">Sửa Menu</h4>


               </div>
               {{--  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  --}}
               <div class="card-body">
                  <form action="{{ route('PageAdmin.menu.sua',$menu->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                        <div class="row">
                            <div class="col-md-12">
                               <div class="form-group">
                                  <label class="bmd-label-floating" style="color:black;font-weight: 600">Tên Menu</label>
                                  <input type="text" class="form-control" name="tenMenu" value="{{ $menu->tenMenu }}">
                               </div>
                            </div>
                         </div>

                <br>

                     <div class="row">
                            <div class="form-group col-md-12">
                                    <label style="color:black;font-weight: 600;padding-left:20px">Nội Dung</label><br>
                                    <textarea name="noiDung" class="form-control "id="editor3">{{ $menu->noiDung }}</textarea>
                           </div>
                      </div>




                     <button type="submit" class="btn btn-primary pull-right">Sửa</button>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
