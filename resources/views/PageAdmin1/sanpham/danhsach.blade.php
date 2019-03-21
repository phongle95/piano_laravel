@extends('Admin2.master')

@section('noidung')

<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                    @if (session('thongbao'))
                    <div style="color:green;font-weight: 400; text-align:center">
                        {{ session('thongbao') }}
                    </div>

                    @endif

                    @if (session('xoa'))
                    <div style="color:red;font-weight: 400; text-align:center">
                        {{ session('xoa') }}
                    </div>

                    @endif
            </div>

        </div>




        <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Danh Sách Sản Phẩm</h4>
                            <p class="card-description">
                                <a href="{{ route('PageAdmin1.sanpham.them') }}" class="btn btn-inverse-info btn-fw">
                                   Thêm Sản Phẩm</a>
                            </p>
                            <table class="table table-hover">
                                    <thead>
                                            <tr>
                                                    <th>Tên Sản Phẩm</th>
                                                    <th>Giá Sản Phẩm</th>
                                                    <th>Hình sản phẩm</th>
                                                    <th>Mã Loại Sản Phẩm</th>
                                                    <th>Sửa</th>
                                                    <th>Xóa</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach ($sanpham as $sp)
                                                <tr>
                                                        <td>{{ $sp->tenSP }}</td>
                                                        <<td style="text-align:left;font-weight: 500;color:red">
                                                                {{number_format($sp->gia) }}đ
                                                        </td>
                                                        <td>
                                                                <img src="/upload/{{ $sp->img }}" ald="salem" width="300px" height="250px">
                                                        </td>
                                                        <td>{{ $sp->maSP }}</td>
                                                        <td>
                                                            <a href="{{ route('PageAdmin1.sanpham.sua',$sp->id) }}" class="btn btn-outline-success btn-fw"> Sửa</a>

                                                        </td>
                                                        <td>
                                                            <a href="{{ route('PageAdmin1.sanpham.xoa',$sp->id) }}" class="btn btn-outline-danger btn-fw"> Xóa</a>
                                                        </td>
                                                </tr>
                                                @endforeach

                                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>

@endsection
