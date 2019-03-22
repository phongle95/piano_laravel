@extends('Layouts.master') @section('noidung')
<!-- End .header -->

<main class="main">
    <img src="assets/images/timkiem.jpg" alt="salem piano">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Kết Quả : {{ $tukhoa }}</li>
            </ol>
        </div>
        <!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">

            <div class="col-lg-9">
                @foreach ($ketqua as $kq)

                <div class="row">
                    <div class="col-sm-5">
                        <figure class="product-image-container">
                            <a href="{{ route('Pages.chitiet',['slug' => str_slug($kq->tenSP),'id'=>$kq->id]) }}" class="product-image">
                                    <img src="/upload/{{ $kq->img }}" alt="product">
                                    </a>
                        </figure>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>

                    <div class="col-sm-7">
                        <br>
                        <br>
                        <br>
                        <a href="{{ route('Pages.chitiet',['slug' => str_slug($kq->tenSP),'id'=>$kq->id]) }}">
                            <h3 style="text-align:center;font-weight: 600;">{{ $kq->tenSP }}</h3></a>
                        <p style="text-align:center;font-weight: 600;">Giá : <span style="color:red">{{ number_format($kq->gia) }}</span> đ </p>

                        <p style="text-align:center;font-weight: 600;">{{ $kq->tomTat }}</p>
                    </div>

                </div>
                <hr> @endforeach

            </div>
            <!-- End .col-lg-8 -->

            <div class="col-lg-3">
                @include('Layouts.facebook'); {{--
                <h2> <span class="badge badge-primary">Fanpage Facebook</span></h2>
                <br>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpianonhapkhaudanang&tabs=timeline&width=340&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> --}}
            </div>
            <!-- End .col-lg-4 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="mb-6"></div>
    <!-- margin -->
</main>
<!-- End .main -->
@endsection @section('meta')
<title>Salem Piano Center - Bán Đàn Piano Ở Đà Nẵng - Dạy Học Piano Tại Đà Nẵng</title>
<meta name="keywords" content="salem piano , cửa hàng piano ở đà nẵng , piano đà nẵng , music center ,piano center ,dạy học đàn piano ở đà nẵng , sửa chữa piano tại đà nẵng ,tổ chức sự kiện tại đà nẵng" />
<meta name="description" content='Piano center , Music center Chuyên mua Bán đàn piano được nhập khẩu từ nhật bản và dạy học đàn piano ở đà nẵng và các loại nhạc cụ' />
<!--meta facebook-->
<meta property="og:title" content="salem piano - piano center - music center bán đàn piano ở đà nẵng và dạy học đàn piano tại đà nẵng" />
<meta property="og:description" content="Salem piano là trung tâm âm nhạc tại đà nẵng chuyên bán các loại đàn piano nhập khẩu từ nhật bản và đào tạo âm nhạc dạy học các loại nhạc cụ như đàn piano" />
<meta property="og:image" content="assets/images/GL_20.jpg" />
<!--meta google-->
<meta itemprop="name" content="Music center chuyên dạy học các loại nhạc cụ như piano guitar drum và bán các loại đàn piano nhập khẩu trực tiếp tại nhật bản" />
<meta itemprop="description" content="Salem piano center chuyên cung cấp các loại đàn piano nhập khẩu tại nhật bản và Đào tạo âm nhạc Music center dạy học đàn piano và các loại nhạc cụ" />
<meta itemprop="image" content="assets/images/gita.jpg" />
<meta name="og:url" content="{{ route('Pages.timkiem') }}" /> @endsection
