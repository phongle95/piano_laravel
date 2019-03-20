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
                        <strong>Sửa Khách Hàng</strong>

                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('PageAdmin1.khachhang.sua',$khachhang->id) }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <span class="badge badge-warning">Tên Khách Hàng</span><br>
                                                    <input type="text" id="text-input" name="tenKH" value="{{ $khachhang->tenKH }}" placeholder="Nhập tên khách hàng" class="form-control">
                                                </div>

                                    </div>



                                    <div class="row form-group">

                                            <div class="col-12 col-md-4">
                                                    <span class="badge badge-warning">Chọn Hình</span><br>
                                                    <input type="file" style="width:200px" name="img" value="{{ old('img') }}">
                                            </div>

                                            <div class="col-12 col-md-8">
                                                    <span class="badge badge-warning">Hình Củ</span><br>
                                                    <img src="/upload/{{ $khachhang->img }}" width="200px" height="150px" alt="salem">
                                            </div>

                                    </div>
                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <span class="badge badge-warning">Địa Chỉ</span><br>
                                                    <input type="text" id="text-input" placeholder="Nhập địa chỉ" name="diaChi" value="{{ $khachhang->diaChi }}" class="form-control">
                                                </div>

                                    </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <span class="badge badge-warning">Đánh Giá</span><br>
                                                    <textarea  id="textarea-input" rows="5" placeholder="Nhập nội dung" class="form-control" name="danhGia">{{ $khachhang->danhGia }}</textarea>
                                                </div>

                                    </div>




                               <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus-square"></i> Sửa
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
