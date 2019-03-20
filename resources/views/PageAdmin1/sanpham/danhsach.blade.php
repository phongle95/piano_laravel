@extends('Admin1.master')

@section('noidung')

<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Danh Sách Sản Phẩm</h3>
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
            <div class="table-data__tool-right">
                <a href="{{ route('PageAdmin1.sanpham.them') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>Thêm Sản Phẩm</a>


            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
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

                    <tr class="tr-shadow">

                        <td>{{ $sp->tenSP }}</td>
                        <<td style="text-align:left;font-weight: 500;color:red">
                                {{number_format($sp->gia) }}đ
                        </td>
                        <td>
                                <img src="/upload/{{ $sp->img }}" ald="salem" width="300px" height="250px">
                        </td>
                        <td>{{ $sp->maSP }}</td>
                        <td>
                            <a href="{{ route('PageAdmin1.sanpham.sua',$sp->id) }}" class="btn btn-warning btn-sm"><i class="zmdi zmdi-edit"></i> Sửa</a>

                        </td>
                        <td>
                            <a href="{{ route('PageAdmin1.sanpham.xoa',$sp->id) }}" class="btn btn-danger btn-sm"><i class="zmdi zmdi-delete"></i> Xóa</a>
                        </td>

                    </tr>
                    <tr class="spacer"></tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>

@endsection
