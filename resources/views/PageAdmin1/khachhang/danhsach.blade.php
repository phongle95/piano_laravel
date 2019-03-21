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
                            <h4 class="card-title">Danh Sách Đánh Giá</h4>
                            <p class="card-description">
                                <a href="{{ route('PageAdmin1.khachhang.them') }}" class="btn btn-inverse-info btn-fw">
                                    Thêm Đánh Giá</a>
                            </p>
                            <table class="table table-hover">
                                    <thead>
                                            <tr>

                                                <th>Khách Hàng</th>
                                                <th>Hình sản phẩm</th>
                                                <th>Đánh Giá</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($khachhang as $kh)

                                            <tr class="tr-shadow">

                                                <td>{{ $kh->tenKH }}</td>

                                                <td>
                                                        <img src="/upload/{{ $kh->img }}" ald="salem" width="300px" height="250px">
                                                </td>
                                                <td>{{ $kh->danhGia }}</td>
                                                <td>
                                                    <a href="{{ route('PageAdmin1.khachhang.sua',$kh->id) }}" class="btn btn-outline-success btn-fw"> Sửa</a>

                                                </td>
                                                <td>
                                                    <a href="{{ route('PageAdmin1.khachhang.xoa',$kh->id) }}"class="btn btn-outline-danger btn-fw"> Xóa</a>
                                                </td>

                                            </tr>
                                            <tr class="spacer"></tr>
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
