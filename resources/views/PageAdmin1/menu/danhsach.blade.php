@extends('Admin2.master')

@section('noidung')

<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Danh Sách Menu</h3>
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
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>

                        <th>Tên Menu</th>
                        <th>Sửa</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($menu as $mn)

                    <tr class="tr-shadow">

                        <td>{{ $mn->tenMenu }}</td>

                        <td>
                            <a href="{{ route('PageAdmin1.menu.sua',$mn->id) }}" class="btn btn-outline-success btn-fw"> Sửa</a>

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
