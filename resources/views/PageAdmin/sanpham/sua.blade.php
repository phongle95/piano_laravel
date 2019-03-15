@extends('Admin.master')

@section('noidung')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-9">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 style="text-align:center;font-weight: 600" class="card-title">Sửa sản phẩm</h4>


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
                  <form action="{{ route('PageAdmin.sanpham.sua',$sanpham->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="row">
                                <div class="col-md-12">
                                   <div class="form-group">
                                      <label class="bmd-label-floating" style="color:black;font-weight: 600">Tên Sản Phẩm</label>
                                      <input type="text" class="form-control" name="tenSP" value="{{ $sanpham->tenSP }}">
                                   </div>
                                </div>
                             </div>
                             <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label class="bmd-label-floating" style="color:black;font-weight: 600">Giá Sản Phẩm</label>
                                          <input type="number" class="form-control" name="gia"value="{{ $sanpham->gia }}">
                                       </div>
                                    </div>
                                 </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <label class="bmd-label-floating" style="color:black;font-weight: 600">Chọn hình</label>
                                        <img src="/upload/{{ $sanpham->img }}" width="200px" height="150px" alt="salme">
                                         <input type="file" style="width:200px" name="img" >
                                    </div>
                                 </div>
                               <br>

                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <div class="form-group">
                                 <label class="bmd-label-floating" style="color:black;font-weight: 600">Tóm tắt sản phẩm</label>
                                 <textarea class="form-control" rows="5" name="tomTat">{{ $sanpham->tomTat }}</textarea>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                            <div class="form-group col-md-12">
                                    <label style="color:black;font-weight: 600">Mô tả sản phẩm</label><br>
                                    <textarea name="MTSP" class="form-control "id="editor1">{{ $sanpham->MTSP }}</textarea>
                           </div>
                      </div>
                      <div class="row">
                            <div class="form-group col-md-12">
                                    <label style="color:black;font-weight: 600">Thông số kĩ thuật</label><br>
                                    <textarea name="TSKT" class="form-control" id="editor2">{{ $sanpham->TSKT }}</textarea>
                           </div>
                      </div>




                     <div class="row">
                            <div class="col-md-12">
                               <div class="form-group">
                                  <label class="bmd-label-floating" style="color:black;font-weight: 600">Mã Sản Phẩm</label>

                                  <select class="custom-select" style="width:200px;" name="maSP" >
                                     @foreach ($loaisanpham as $lsp)

                                        <option  @if($sanpham->maSP == $lsp->maSP) {{ "selected" }} @endif value="{{ $lsp->maSP }}">{{ $lsp->tenSP }}</option>

                                     @endforeach
                                  </select>
                               </div>
                            </div>
                         </div>
                     <button type="submit" class="btn btn-primary pull-right">Sửa Sản Phẩm</button>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
