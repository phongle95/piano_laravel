@extends('Layouts.master')
@section('noidung')
<main class="main">
        <div class="banner banner-cat" style="background-image: url('assets/images/sanpham.jpg');">
            <div class="banner-content container">

            </div>
            <!-- End .banner-content -->
        </div>
        <!-- End .banner -->

        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb mt-0">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Tìm kiếm</li>
                </ol>
            </div>
            <!-- End .container -->
        </nav>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="row row-sm">
                        @foreach ($ketqua as $item)

                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product">
                                <figure class="product-image-container">

                                    <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="product-image3">
                                        <img src="upload/{{ $item->img }}" alt="máy xông hơi">
                                    </a>
                                    <span class="product-label label-hot">New</span>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span>
                                            <!-- End .ratings -->
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <h2 class="product-title">
                                                <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}">{{ $item->tenSP }}</a>
                                            </h2>
                                    <div class="price-box">
                                        <span class="product-price">Giá : <strong style="color:red">{{ number_format($item->gia) }}</strong> vnđ</span>
                                    </div>
                                    <!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-wishlist" title="Chi tiết">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-cart" title="Chi tiết">
                                            <span>Chi Tiết</span>
                                        </a>

                                        <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-compare" title="Chi tiết">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div>
                                    <!-- End .product-action -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <!-- End .product -->
                        </div>
                        <!-- End .col-xl-3 -->
                        @endforeach

                    </div>
                    <!-- End .row -->

                    <nav class="toolbox toolbox-pagination">


                        <ul class="pagination">

                            <li class="page-item">{!! $ketqua->links() !!}</li>


                        </ul>
                    </nav>
                </div>
                <!-- End .col-lg-9 -->

            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->

        <div class="mb-5"></div>
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
<meta name="og:url" content="{{ route('Pages.timkiem') }}"/>
@endsection
