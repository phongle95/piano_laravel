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
                        <form action="{{ route('PageAdmin1.sanpham.them') }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">

                                                    <label class="badge badge-info">Tên Sản Phẩm</label><br><br>
                                                    <input type="text" id="text-input" name="tenSP" value="{{ old('tenSP') }}" placeholder="Nhập tên sản phẩm" class="form-control">
                                                </div>

                                    </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">

                                                    <label class="badge badge-info">Giá Sản Phẩm</label><br>
                                                    <input type="number" id="text-input" placeholder="Nhập giá sản phẩm" name="gia" value="{{ old('gia') }}" class="form-control">
                                                </div>

                                    </div>



                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Chọn Hình</label><br><br>
                                                    <input type="file" style="width:200px" name="img" value="{{ old('img') }}">

                                            </div>

                                    </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Tóm Tắt</label><br>
                                                    <textarea  id="textarea-input" rows="5" placeholder="Nhập nội dung" class="form-control" name="tomTat">{{ old('tomTat') }}</textarea>
                                                </div>

                                    </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Mô Tả Sản Phẩm</label><br>
                                                    <textarea  id="editor1" rows="5" placeholder="Nhập nội dung" class="form-control" name="MTSP">{{ old('MTSP') }}</textarea>
                                             </div>

                                    </div>
                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Thông Số Kĩ Thuật</label><br>
                                                    <textarea  id="editor2" rows="5" placeholder="Nhập nội dung" class="form-control" name="TSKT">{{ old('TSKT') }}</textarea>
                                                </div>

                                    </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Mã Sản Phẩm</label><br>
                                                    <select name="maSP" class="form-control">
                                                            @foreach ($loaisanpham as $lsp)
                                                            <option value="{{ $lsp->maSP }}">{{ $lsp->tenSP }}</option>
                                                         @endforeach
                                                    </select>
                                                </div>

                                    </div>

                               <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-fw">
                                         Thêm
                                    </button>
                                    <a href="{{ route('PageAdmin1.sanpham.danhsach') }}" class="btn btn-info btn-fw">
                                        Quay về
                                    </a>
                                </div>
                        </form>
                    </div>

                </div>

    </div>
</div>

@endsection
