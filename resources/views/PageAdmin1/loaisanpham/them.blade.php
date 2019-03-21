@extends('Admin2.master')

@section('noidung')

<div class="row">

    <div class="col-md-12">
        <!-- DATA TABLE -->
            <div class="card">
                    <div class="card-header">
                        <strong>Thêm Loại Sản Phẩm</strong>

                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('PageAdmin1.loaisanpham.them') }}" method="POST" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                            <div class="row form-group">

                                <div class="col-12 col-md-12">
                                        <label class="badge badge-info">Tên Sản Phẩm</label><br>
                                    <input type="text" id="text-input" name="tenSP" value="{{ old('tenSP') }}" placeholder="Nhập tên sản phẩm" class="form-control">
                                </div>
                            </div>

                            <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-fw">
                                        Thêm
                                    </button>
                                    <a href="{{ route('PageAdmin1.loaisanpham.danhsach') }}" class="btn btn-info btn-fw">
                                            Quay về
                                         </a>
                                </div>
                        </form>
                    </div>

                </div>

    </div>
</div>

@endsection
