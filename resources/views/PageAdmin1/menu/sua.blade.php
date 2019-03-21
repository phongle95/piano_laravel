@extends('Admin2.master')

@section('noidung')

<div class="row">

    <div class="col-md-12">

        <!-- DATA TABLE -->
            <div class="card">
                    <div class="card-header">
                        <strong>Sửa Menu</strong>

                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('PageAdmin1.menu.sua',$menu->id) }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Tên Menu</label><br>
                                                    <input type="text" id="text-input" name="tenMenu" value="{{ $menu->tenMenu }}" placeholder="Nhập tên Menu" class="form-control">
                                                </div>

                                    </div>


                                    <div class="row form-group">

                                            <div class="col-12 col-md-12">
                                                    <label class="badge badge-info">Nội Dung</label><br>
                                                    <textarea  id="editor3" rows="5" placeholder="Nhập nội dung" class="form-control" name="noiDung">{{ $menu->noiDung }}</textarea>
                                                </div>

                                    </div>



                               <div class="card-footer">
                                    <button type="submit" class="btn btn-dark btn-fw">
                                        Sửa
                                    </button>
                                    <a href="{{ route('PageAdmin1.menu.danhsach') }}" class="btn btn-info btn-fw">
                                       Quay về
                                    </a>
                                </div>
                        </form>
                    </div>

                </div>

    </div>
</div>

@endsection
