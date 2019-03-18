@extends('Layouts.master')
@section('noidung')
<!-- End .header -->


<main class="main">
        <img src="https://vietthuong.vn//upload/images/anh-cover-piano-upright.jpg" alt="salem piano">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kết Quả : {{ $tukhoa }}</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            <div class="row">


                <div class="col-lg-8">
                    @foreach ($ketqua as $kq)


                    <div class="row">
                            <div class="col-sm-5">
                                <figure class="product-image-container">
                                    <a href="{{ route('Pages.chitiet',['slug' => str_slug($kq->tenSP),'id'=>$kq->id]) }}" class="product-image">
                                    <img src="/upload/{{ $kq->img }}" alt="product">
                                    </a>
                                </figure>
                                <br><br><br><br>
                            </div>


                            <div class="col-sm-7">
                                    <br><br><br>
                                   <a href="{{ route('Pages.chitiet',['slug' => str_slug($kq->tenSP),'id'=>$kq->id]) }}"> <h3 style="text-align:center;font-weight: 600;">{{ $kq->tenSP }}</h3></a>
                                    <p  style="text-align:center;font-weight: 600;">Giá : <span style="color:red">{{ number_format($kq->gia) }}</span> đ </p>

                                    <p  style="text-align:center;font-weight: 600;">{{ $kq->tomTat }}</p>
                            </div>

                       </div>
                       <hr>
                   @endforeach

                </div><!-- End .col-lg-8 -->

                <div class="col-lg-4">
                        <h2> <span class="badge badge-primary">Fanpage Facebook</span></h2>
                        <br>
                        <iframe
                           src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpianonhapkhaudanang&tabs=timeline&width=340&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                           width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                           allowTransparency="true" allow="encrypted-media"></iframe>
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-6"></div><!-- margin -->
    </main><!-- End .main -->
@endsection
