@extends('Layouts.master')
@section('noidung')
<!-- End .header -->


<main class="main">
        <img src="assets/images/chitiet.jpg" alt="salem piano">

        <br>
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
           <div class="container">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                 <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                 <li class="breadcrumb-item active " aria-current="page">Chi Tiết Sản Phẩm</li>
              </ol>
           </div><!-- End .container -->
        </nav>
        <div class="container">
           <div class="row">
              <div class="col-lg-9">
                 <div class="product-single-container product-single-default">
                    <div class="row">
                       <div class="col-lg-7 col-md-6 product-single-gallery">
                          <div class="product-slider-container product-item">
                             <div class="">
                                <div class="product-item">
                                    <img class="custom-image-product"  src="/upload/{{ $chitiet->img }}" alt="salem piano">
                                </div>

                             </div>

                          </div>

                       </div><!-- End .col-lg-7 -->

                       <div class="col-lg-5 col-md-6">
                          <div class="product-single-details">
                             <h1 class="product-title">{{ $chitiet->tenSP }}</h1>

                             <div class="ratings-container">
                                <div class="product-ratings">
                                   <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->

                                <a href="#" class="rating-link">( 6 Reviews )</a>
                             </div><!-- End .product-container -->

                             <div class="price-box">
                                <span class="product-price">{{ number_format($chitiet->gia) }}đ</span>
                             </div><!-- End .price-box -->

                             <div class="product-desc">
                                <p>{{  $chitiet->tomTat }}</p>
                             </div><!-- End .product-desc -->
                             <h2> <span class="badge badge-warning">Lên Hệ Mua Hàng</span></h2>
                            <!-- End .product-action -->
                            <div class="row">

                                <div class="col-sm-6">
                                        <br>
                                    <a target="_blank" href="https://www.facebook.com/pianonhapkhaudanang/"><img width="100%" src="assets/images/chat-facebook.png" alt="chat-facebook"></a>
                                </div>
                                <div class="col-sm-6">
                                        <br>
                                    <a target="_blank" href="https://zalo.me/0394690998"><img width="100%" src="assets/images/chat-zalo.png" alt="chat-zalo"></a>
                                </div>
                            </div>
                        <!-- End .product single-share -->

                          </div><!-- End .product-single-details -->
                       </div><!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                 </div><!-- End .product-single-container -->

                 <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                       <li class="nav-item">
                          <a class="nav-link active" id="product-tab-desc" data-toggle="tab"
                             href="#product-desc-content" role="tab" aria-controls="product-desc-content"
                             aria-selected="true">Mô Tả Sản Phẩm</a>
                       </li>

                       <li class="nav-item">
                          <a class="nav-link" id="product-tab-reviews" data-toggle="tab"
                             href="#product-reviews-content" role="tab" aria-controls="product-reviews-content"
                             aria-selected="false">Thông Số Kĩ Thuật</a>
                       </li>
                    </ul>


                    <div class="tab-content">
                       <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                          aria-labelledby="product-tab-desc">
                          <div class="product-desc-content">
                                {!! $chitiet->MTSP !!}
                          </div><!-- End .product-desc-content -->
                       </div><!-- End .tab-pane -->


                       <div class="tab-pane fade" id="product-reviews-content" role="tabpanel"
                          aria-labelledby="product-tab-reviews">
                          <div class="product-reviews-content">


                             <div class="add-product-review">
                                    {!! $chitiet->TSKT !!}


                             </div><!-- End .add-product-review -->
                          </div><!-- End .product-reviews-content -->
                       </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                 </div><!-- End .product-single-tabs -->
              </div><!-- End .col-lg-9 -->

              <div class="sidebar-overlay"></div>
              <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
              <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
                 <div class="sidebar-wrapper">
                    <div class="widget widget-brand">
                       <a href="#">
                          <img src="assets/images/logosalem.png" width="160px" height="100px" alt="Salem piano">
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
                             <h4>hOÀN TIỀN <br>100% NẾU HÀNG LỖI</h4>
                          </li>
                          <li>
                             <i class="icon-online-support"></i>
                             <h4>ONLINE<br>HỔ TRỢ 24/7</h4>
                          </li>
                       </ul>
                    </div><!-- End .widget -->


                    <h2> <span class="badge badge-primary">Fanpage Facebook</span></h2>
                    <br>
                    <iframe
                       src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpianonhapkhaudanang&tabs=timeline&width=280&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                       width="100%" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                       allowTransparency="true" allow="encrypted-media"></iframe>



                 </div>
              </aside><!-- End .col-md-3 -->
           </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="featured-section">
           <div class="container">
              <h2 class="carousel-title">SẢN PHẨM HÓT</h2>

              <div class="featured-products owl-carousel owl-theme owl-dots-top">
                    @foreach ($piano as $item)


                    <div class="product">
                        <figure class="product-image-container">
                           <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="product-image">
                           <img class="custom-image-product"  src="/upload/{{ $item->img }}" alt="salem piano">
                           </a>
                        </figure>
                        <div class="product-details">
                           <div class="ratings-container">
                              <div class="product-ratings">
                                 <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                              </div>
                              <!-- End .product-ratings -->
                           </div>
                           <!-- End .product-container -->
                           <h2 class="product-title">
                              <a href="">{{ $item->tenSP }}</a>
                           </h2>
                           <div class="price-box">
                              <span style="color:red" class="product-price">{{number_format($item->gia) }}đ</span>
                           </div>
                           <!-- End .price-box -->
                           <div class="product-action">
                              <a href="tel:0394690998" class="paction add-wishlist" title="gọi ngay cho salem piano">
                              <span>Add to Wishlist</span>
                              </a>
                              <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-cart" title="Mua Sản Phẩm">
                              <span>Mua Sản Phẩm</span>
                              </a>
                              <a href="tel:0394690998" class="paction add-compare" title="gọi ngay cho salem piano">
                              <span>Add to Compare</span>
                              </a>
                           </div>
                           <!-- End .product-action -->
                        </div>
                        <!-- End .product-details -->
                     </div>
                     <!-- End .product -->

                    @endforeach

              </div><!-- End .featured-proucts -->
           </div><!-- End .container -->
        </div><!-- End .featured-section -->
     </main><!-- End .main -->
<!-- End .main -->
@endsection

@section('meta')
    <title>{{$chitiet->title}}</title>
<meta name="keywords" content="{{$chitiet->keyword}}" />
<meta name="description" content='{{$chitiet->description}}' />
<!--meta facebook-->
<meta property="og:title" content="{{$chitiet->title}}" />
<meta property="og:description" content="{{$chitiet->description}}" />
<meta property="og:image" content= "/upload/{{ $chitiet->img }}" />
<!--meta google-->
<meta itemprop="name" content="Music center chuyên dạy học các loại nhạc cụ như piano guitar drum và bán các loại đàn piano nhập khẩu trực tiếp tại nhật bản" />
<meta itemprop="description" content="Salem piano center chuyên cung cấp các loại đàn piano nhập khẩu tại nhật bản và Đào tạo âm nhạc Music center dạy học đàn piano và các loại nhạc cụ" />
<meta itemprop="image" content= "/upload/{{ $chitiet->img }}" />
<meta name="og:url" content="{{ route('Pages.chitiet',['slug' => str_slug($chitiet->tenSP),'id'=>$chitiet->id]) }}"/>
@endsection
