@extends('Admin2.master')

@section('noidung')

<div class="row">

    <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <!-- DATA TABLE -->
            <div class="card">
                    <div class="card-header">
                        <strong>Thêm Sản Phẩm</strong>

                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('PageAdmin1.sanpham.sua',$sanpham->id) }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                    <div class="row form-group">

                                        <div class="col-12 col-md-12">
                                                <label class="badge badge-info">Tên Sản Phẩm</label><br>
                                                <input type="text" id="text-input" name="tenSP" value="{{ $sanpham->tenSP }}" placeholder="Nhập tên sản phẩm" class="form-control">
                                            </div>

                                </div>

                                <div class="row form-group">

                                    <div class="col-12 col-md-12">
                                            <label class="badge badge-info">Tên Title Meta</label><br>
                                            <input type="text" id="text-input" name="title" value="{{ $sanpham->title }}" placeholder="Nhập tên title" class="form-control">
                                        </div>

                                </div>

                                <div class="row form-group">

                                    <div class="col-12 col-md-12">
                                            <label class="badge badge-info">Description Meta</label><br>
                                            <textarea  id="textarea-input" rows="5" placeholder="Nhập nội dung" class="form-control" name="description">{{ $sanpham->description }}</textarea>
                                        </div>

                            </div>

                                <div class="row form-group">

                                    <div class="col-12 col-md-12">
                                            <label class="badge badge-info">Keyword Meta (SEO)</label><br>
                                            <input type="text" id="text-input" name="keyword" value="{{ $sanpham->keyword }}" placeholder="Nhập Keyword" class="form-control">
                                        </div>

                            </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Giá Sản Phẩm</label><br>
                                                    <input type="number" id="text-input" placeholder="Nhập giá sản phẩm" name="gia" value="{{ $sanpham->gia }}" class="form-control">
                                                </div>

                                    </div>



                                    <div class="row form-group">

                                            <div class="col-12 col-md-6">
                                                    <label class="badge badge-info">Chọn Hình</label><br>
                                                    <input type="file" style="width:200px" name="img">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                    <label class="badge badge-info">Hình Củ</label><br>
                                                    <img src="/upload/{{ $sanpham->img }}" width="200px" height="150px" alt="salme">
                                            </div>

                                    </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Tóm Tắt</label><br>
                                                    <textarea  id="textarea-input" rows="5" placeholder="Nhập nội dung" class="form-control" name="tomTat">{{ $sanpham->tomTat }}</textarea>
                                                </div>

                                    </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Mô Tả Sản Phẩm</label><br>
                                                    <textarea  id="editor1" rows="5" placeholder="Nhập nội dung" class="form-control" name="MTSP">{{ $sanpham->MTSP }}</textarea>
                                             </div>

                                    </div>
                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Thông Số Kĩ Thuật</label><br>
                                                    <textarea  id="editor2" rows="5" placeholder="Nhập nội dung" class="form-control" name="TSKT">{{ $sanpham->TSKT }}</textarea>
                                                </div>

                                    </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Mã Sản Phẩm</label><br>
                                                    <select name="maSP" class="form-control">
                                                        @foreach ($loaisanpham as $lsp)

                                                            <option  @if($sanpham->maSP == $lsp->maSP) {{ "selected" }} @endif value="{{ $lsp->maSP }}">{{ $lsp->tenSP }}</option>

                                                        @endforeach
                                                    </select>
                                                </div>

                                    </div>

                               <div class="card-footer">
                                    <button type="submit"class="btn btn-dark btn-fw">
                                        Sửa
                                    </button>
                                    <a href="{{ route('PageAdmin1.sanpham.danhsach') }}"  class="btn btn-info btn-fw">
                                        Quay về
                                    </a>
                                </div>
                        </form>
                    </div>

                </div>

    </div>
</div>

@endsection
