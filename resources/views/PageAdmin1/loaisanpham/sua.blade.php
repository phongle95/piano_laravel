@extends('Admin2.master')

@section('noidung')

<div class="row">

    <div class="col-md-12">
        <!-- DATA TABLE -->
            <div class="card">
                    <div class="card-header">
                        <strong>Sửa Loại Sản Phẩm</strong>

                    </div>
                    <div class="card-body card-block">
                        <form action="" method="POST" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                            <div class="row form-group">

                                <div class="col-12 col-md-12">
                                    <span class="badge badge-warning">Tên Sản Phẩm</span><br>
                                    <input type="text" id="text-input" name="tenSP" value="{{ $loaisanpham->tenSP }}" placeholder="Nhập tên sản phẩm" class="form-control">
                                </div>
                            </div>

                            <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus-square"></i> Sửa
                                    </button>
                                    <a href="{{ route('PageAdmin1.loaisanpham.danhsach') }}" type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-reply-all"></i> Quay về
                                    </a>
                                </div>
                        </form>
                    </div>

                </div>

    </div>
</div>

@endsection
