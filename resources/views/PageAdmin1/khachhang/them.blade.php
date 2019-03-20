@extends('Admin1.master')

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
                        <strong>Thêm Khách Hàng</strong>

                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('PageAdmin1.khachhang.them') }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <span class="badge badge-warning">Tên Khách Hàng</span><br>
                                                    <input type="text" id="text-input" name="tenKH" value="{{ old('tenKH') }}" placeholder="Nhập tên khách hàng" class="form-control">
                                                </div>

                                    </div>



                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <span class="badge badge-warning">Chọn Hình</span><br>
                                                    <input type="file" style="width:200px" name="img" value="{{ old('img') }}">
                                            </div>

                                    </div>
                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <span class="badge badge-warning">Địa Chỉ</span><br>
                                                    <input type="text" id="text-input" placeholder="Nhập địa chỉ" name="diaChi" value="{{ old('diaChi') }}" class="form-control">
                                                </div>

                                    </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <span class="badge badge-warning">Đánh Giá</span><br>
                                                    <textarea  id="textarea-input" rows="5" placeholder="Nhập nội dung" class="form-control" name="danhGia">{{ old('danhGia') }}</textarea>
                                                </div>

                                    </div>




                               <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus-square"></i> Thêm
                                    </button>
                                    <a href="{{ route('PageAdmin1.khachhang.danhsach') }}" type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-reply-all"></i> Quay về
                                    </a>
                                </div>
                        </form>
                    </div>

                </div>

    </div>
</div>

@endsection
