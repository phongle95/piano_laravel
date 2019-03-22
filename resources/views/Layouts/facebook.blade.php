<div class="widget widget-brand">
        <a href="#">
            <img src="assets/images/logosalem.png" width="180px" height="130px" alt="salem piano">
        </a>
</div><!-- End .widget -->
<div class="widget widget-info">
        <ul>
            <li>
                <i class="icon-shipping"></i>
                <h4>FREE<br>SHIPPING</h4>
            </li>
            <li>
                <i class="icon-us-dollar"></i>
                <h4>100% MONEY<br>BACK GUARANTEE</h4>
            </li>
            <li>
                <i class="icon-online-support"></i>
                <h4>ONLINE<br>SUPPORT 24/7</h4>
            </li>
        </ul>
    </div><!-- End .widget -->

    <div class="widget widget-banner">
            <div class="banner banner-image">
            <a href="{{route('Pages.sanpham')}}">
                    <img src="assets/images/km1.jpg" alt="Banner Desc">
                </a>
            </div><!-- End .banner -->
    </div><!-- End .widget -->
<br>

<div class="widget widget-featured">
<h2> <span class="badge badge-primary">Top Sản Phẩm Bán Chạy </span></h2>

            <div class="widget-body">
                <div class="owl-carousel widget-featured-products">
                    <div class="featured-col">
                        @foreach ($pianoshare as $item)

                            <div class="product product-sm" style="height:70px">
                                    <figure class="product-image-container" style="height:70px">
                                        <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="product-image">
                                            <img src="/upload/{{ $item->img }}" alt="salem piano">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}">{{ $item->tenSP }}</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                                <span style="color:red" class="product-price">{{number_format($item->gia) }}đ</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                        @endforeach


                    </div><!-- End .featured-col -->

                    <div class="featured-col">
                            @foreach ($guitarshare as $item)

                            <div class="product product-sm" style="height:70px">
                                    <figure class="product-image-container" style="height:70px">
                                        <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="product-image">
                                            <img src="/upload/{{ $item->img }}" alt="salem piano">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}">{{ $item->tenSP }}</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                                <span style="color:red" class="product-price">{{number_format($item->gia) }}đ</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                        @endforeach
                        </div><!-- End .product -->


                    </div><!-- End .featured-col -->
                </div><!-- End .widget-featured-slider -->
            </div><!-- End .widget-body -->


<h2> <span class="badge badge-primary">Fanpage Facebook</span></h2>
<br>
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpianonhapkhaudanang&tabs=timeline&width=340&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
<br><br>



