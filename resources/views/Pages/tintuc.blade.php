@extends('Layouts.master') @section('noidung')
<main class="main">
    <br>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
            </ol>
        </div>
        <!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                @foreach ($tin as $item)

                <article class="entry">
                    <div class="entry-media">
                        <a href="{{ route('Pages.detailnews',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">
                            <img src="upload/{{ $item->img }}" alt="tin tức xông hơi">
                        </a>
                    </div>
                    <!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-date">
                            <span class="day">{{ date("d", strtotime($item->date)) }}</span>
                            <span class="month">May</span>
                        </div>
                        <!-- End .entry-date -->

                        <h2 class="entry-title">
                            <a href="{{ route('Pages.detailnews',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">{{ $item->tieuDe }}</a>
                        </h2>

                        <div class="entry-content">
                            <p>{{ $item->tomTat }}</p>

                            <a href="{{ route('Pages.detailnews',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}" class="read-more">Đọc Thêm<i class="icon-angle-double-right"></i></a>
                        </div>
                        <!-- End .entry-content -->

                        <div class="entry-meta">
                            <span><i class="icon-calendar"></i>{{ date("d-m-Y", strtotime($item->date)) }}</span>
                            <span><i class="icon-user"></i>By <a>Phong Lê</a></span>

                        </div>
                        <!-- End .entry-meta -->
                    </div>
                    <!-- End .entry-body -->
                </article>
                <!-- End .entry -->
                @endforeach




                <nav class="toolbox toolbox-pagination">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>

                        <li class="page-item"> {!! $tin->links() !!}</li>

                    </ul>
                </nav>
            </div>
            <!-- End .col-lg-9 -->
            <aside class="sidebar col-lg-3">
                 @include('Layouts.sidebar')
            </aside>
            <!-- End .col-lg-3 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="mb-6"></div>
    <!-- margin -->
</main>
<!-- End .main -->
@endsection

@section('meta')
<title>Piano Đà Nẵng</title>
<meta name="keywords" content="salem piano , cửa hàng piano ở đà nẵng , piano đà nẵng , music center ,piano center ,dạy học đàn piano ở đà nẵng , sửa chữa piano tại đà nẵng ,tổ chức sự kiện tại đà nẵng" />
<meta name="description" content='Piano center , Music center Chuyên mua Bán đàn piano được nhập khẩu từ nhật bản và dạy học đàn piano ở đà nẵng và các loại nhạc cụ' />
<!--meta facebook-->
<meta property="og:title" content="salem piano - piano center - music center bán đàn piano ở đà nẵng và dạy học đàn piano tại đà nẵng" />
<meta property="og:description" content="Salem piano là trung tâm âm nhạc tại đà nẵng chuyên bán các loại đàn piano nhập khẩu từ nhật bản và đào tạo âm nhạc dạy học các loại nhạc cụ như đàn piano" />
<meta property="og:image" content= "assets/images/GL_20.jpg" />
<!--meta google-->
<meta itemprop="name" content="Music center chuyên dạy học các loại nhạc cụ như piano guitar drum và bán các loại đàn piano nhập khẩu trực tiếp tại nhật bản" />
<meta itemprop="description" content="Salem piano center chuyên cung cấp các loại đàn piano nhập khẩu tại nhật bản và Đào tạo âm nhạc Music center dạy học đàn piano và các loại nhạc cụ" />
<meta itemprop="image" content= "assets/images/gita.jpg" />
<meta name="og:url" content="{{ route('Pages.sanpham') }}"/>
@endsection
