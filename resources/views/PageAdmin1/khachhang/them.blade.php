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
                        <strong>Thêm Khách Hàng</strong>

                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('PageAdmin1.khachhang.them') }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Tên Khách Hàng</label><br>
                                                    <input type="text" id="text-input" name="tenKH" value="{{ old('tenKH') }}" placeholder="Nhập tên khách hàng" class="form-control">
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
                                                    <label class="badge badge-info">Địa Chỉ</label><br>
                                                    <input type="text" id="text-input" placeholder="Nhập địa chỉ" name="diaChi" value="{{ old('diaChi') }}" class="form-control">
                                                </div>

                                    </div>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Đánh Giá</label><br>
                                                    <textarea  id="textarea-input" rows="5" placeholder="Nhập nội dung" class="form-control" name="danhGia">{{ old('danhGia') }}</textarea>
                                                </div>

                                    </div>




                               <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-fw">
                                       Thêm
                                    </button>
                                    <a href="{{ route('PageAdmin1.khachhang.danhsach') }}"  class="btn btn-info btn-fw"> Quay về
                                    </a>
                                </div>
                        </form>
                    </div>

                </div>

    </div>
</div>

@endsection
