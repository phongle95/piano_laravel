@extends('Layouts.master')
@section('noidung')
<!--start nội dung tài -->
<main class="main">
   <div class="home-top-container">
      <div class="container">
         <div class="row">
            <div class="col-lg-9">
               <div class="home-slider owl-carousel owl-carousel-lazy">
                  <div class="home-slide">
                     <div class="owl-lazy slide-bg" data-src="assets/images/1sl.png"></div>
                     <div class="home-slide-content text-white">
                        <h3>Giảm giá<span>10%</span> sản phẩm</h3>
                        <h1>Summer Sale</h1>
                        <p>Xem chi tiết tại salem piano</p>
                        <a href="" class="btn btn-dark">Chi Tiết</a>
                     </div>
                     <!-- End .home-slide-content -->
                  </div>
                  <!-- End .home-slide -->
                  <div class="home-slide">
                     <div class="owl-lazy slide-bg" data-src="assets/images/2sl.png"></div>
                     <div class="home-slide-content text-white">
                        <h3>Giảm giá<span>10%</span> sản phẩm</h3>
                        <h1>Summer Sale</h1>
                        <p>Xem chi tiết tại salem piano</p>
                        <a href="" class="btn btn-dark">Chi Tiết</a>
                     </div>
                     <!-- End .home-slide-content -->
                  </div>
                  <!-- End .home-slide -->
                  <div class="home-slide">
                     <div class="owl-lazy slide-bg" data-src="assets/images/3sl.png"></div>
                     <div class="home-slide-content text-white">
                        <h3>Giảm giá<span>10%</span> sản phẩm</h3>
                        <h1>Summer Sale</h1>
                        <p>Xem chi tiết tại salem piano</p>
                        <a href="" class="btn btn-dark">Chi Tiết</a>
                     </div>
                     <!-- End .home-slide-content -->
                  </div>
                  <!-- End .home-slide -->
               </div>
               <!-- End .home-slider -->
            </div>
            <!-- End .col-lg-9 -->
            <div class="col-lg-3 order-lg-first">
               <div class="side-custom-menu">
                  <h2>TOP THƯƠNG HIỆU</h2>
                  <div class="side-menu-body">
                     <ul>
                        <li><a href=""><img src="https://img.icons8.com/color/40/000000/christmas-star.png"> Steinway & Sons</a></li>
                        <li><a href=""><img src="https://img.icons8.com/color/40/000000/christmas-star.png">  Kawai</a></li>
                        <li><a href=""> <img src="https://img.icons8.com/color/40/000000/christmas-star.png">  Baldwin</a></li>
                        <li><a href=""> <img src="https://img.icons8.com/color/40/000000/christmas-star.png">  Yamaha</a></li>
                        <li><a href=""><img src="https://img.icons8.com/color/40/000000/christmas-star.png">  Charles R.Walter</a></li>
                     </ul>
                     <a href="#" class="btn btn-block btn-primary">SALEM PIANO Sale - <strong>10%</strong>
                     On</a>
                  </div>
                  <!-- End .side-menu-body -->
               </div>
               <!-- End .side-custom-menu -->
            </div>
            <!-- End .col-lg-3 -->
         </div>
         <!-- End .row -->
      </div>
      <!-- End .container -->
   </div>
   <!-- End .home-top-container -->
   <div class="info-boxes-container">
      <div class="container">
         <div class="info-box">
            <i class="icon-shipping"></i>
            <div class="info-box-content">
               <h4>MIỂN PHÍ VẬN CHUYỂN</h4>
               <p>Giao hành an toàn nhanh chóng</p>
            </div>
            <!-- End .info-box-content -->
         </div>
         <!-- End .info-box -->
         <div class="info-box">
            <i class="icon-us-dollar"></i>
            <div class="info-box-content">
               <h4>ĐÚNG GIÁ TRÊN THỊ TRƯỜNG</h4>
               <p>100% Hàng chính hãng</p>
            </div>
            <!-- End .info-box-content -->
         </div>
         <!-- End .info-box -->
         <div class="info-box">
            <i class="icon-support"></i>
            <div class="info-box-content">
               <h4>HỔ TRỢ 24/7</h4>
               <p>Phục vụ tận tình chu đáo</p>
            </div>
            <!-- End .info-box-content -->
         </div>
         <!-- End .info-box -->
      </div>
      <!-- End .container -->
   </div>
   <!-- End .info-boxes-container -->
   <div class="mb-4"></div>
   <!-- margin -->
   <div class="featured-section">
      <div class="container">
         <h2 class="carousel-title">Đàn Piano HOT</h2>
         <div class="featured-products owl-carousel owl-theme owl-dots-top">

            @foreach ($piano as $item)


            <div class="product">
               <figure class="product-image-container">
                  <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="product-image">
                    <img src="/upload/{{ $item->img }}" alt="product">
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
                     <a href="chitiet.html">{{ $item->tenSP }}</a>
                  </h2>
                  <div class="price-box">
                     <span style="color:red" class="product-price">{{number_format($item->gia) }}đ</span>
                  </div>
                  <!-- End .price-box -->
                  <div class="product-action">
                     <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-wishlist" title="Add to Wishlist">
                     <span>Add to Wishlist</span>
                     </a>
                     <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-cart" title="Mua Sản Phẩm">
                     <span>Mua Sản Phẩm</span>
                     </a>
                     <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-compare" title="Add to Compare">
                     <span>Add to Compare</span>
                     </a>
                  </div>
                  <!-- End .product-action -->
               </div>
               <!-- End .product-details -->
            </div>
            <!-- End .product -->

            @endforeach
         </div>
         <!-- End .featured-proucts -->
      </div>
      <!-- End .container -->
   </div>
   <!-- End .featured-section -->
   <div class="featured-section">
      <div class="container">
         <h2 class="carousel-title">Đàn Guitar HOT</h2>
         <div class="featured-products owl-carousel owl-theme owl-dots-top">

            @foreach ($guitar as $item)

            <div class="product">
               <figure class="product-image-container">
                  <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="product-image">
                  <img src="/upload/{{ $item->img }}" alt="product">
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
                     <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-wishlist" title="Add to Wishlist">
                     <span>Add to Wishlist</span>
                     </a>
                     <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-cart" title="Mua Sản Phẩm">
                     <span>Mua Sản Phẩm</span>
                     </a>
                     <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-compare" title="Add to Compare">
                     <span>Add to Compare</span>
                     </a>
                  </div>
                  <!-- End .product-action -->
               </div>
               <!-- End .product-details -->
            </div>
            <!-- End .product -->
            @endforeach


         </div>
         <!-- End .featured-proucts -->
      </div>
      <!-- End .container -->
   </div>
   <!-- End .featured-section -->
   <div class="container">
   <h2 class="carousel-title">Dịch Vụ Của Salem piano</h2>
   <div class="product-wrapper">
      <div class="row row-sm category-grid">
         <div class="col-6 col-md-3">
            <div class="grid-product">
               <figure class="product-image-container">
                  <a href="giaoduc.html" class="product-image">
                  <img src="assets/images/daynhac.png" alt="product">
                  </a>
                  <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
               </figure>
               <div class="product-details">
                  <div class="ratings-container">
                     <div class="product-ratings">
                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                     </div>
                     <!-- End .product-ratings -->
                  </div>
                  <!-- End .product-container -->
                  <h2 class="product-title">
                     <a href="giaoduc.html">Giáo Dục</a>
                  </h2>
                  <div class="product-grid-action">
                     <a href="giaoduc.html" class="paction add-cart" title="Xem Chi Tiết">
                     <span>Xem Chi Tiết</span>
                     </a>
                  </div>
                  <!-- End .product-action -->
               </div>
               <!-- End .product-details -->
            </div>
            <!-- End .product -->
         </div>
         <!-- End .col-md-4 -->
         <div class="col-6 col-md-3">
            <div class="grid-product">
               <figure class="product-image-container">
                  <a href="" class="product-image">
                  <img src="assets/images/suachua.png" alt="product">
                  </a>
                  <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                  <!-- <span class="product-label label-sale">-20%</span>
                     <span class="product-label label-hot">New</span> -->
               </figure>
               <div class="product-details">
                  <div class="ratings-container">
                     <div class="product-ratings">
                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                     </div>
                     <!-- End .product-ratings -->
                  </div>
                  <!-- End .product-container -->
                  <h2 class="product-title">
                     <a href="">Sửa Chửa</a>
                  </h2>
                  <div class="product-grid-action">
                     <a href="" class="paction add-cart" title="Xem Chi Tiết">
                     <span>Xem Chi Tiết</span>
                     </a>
                  </div>
                  <!-- End .product-action -->
               </div>
               <!-- End .product-details -->
            </div>
            <!-- End .product -->
         </div>
         <!-- End .col-md-4 -->
         <div class="col-6 col-md-3">
            <div class="grid-product">
               <figure class="product-image-container">
                  <a href="" class="product-image">
                  <img src="assets/images/chothue.png" alt="product">
                  </a>
                  <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
               </figure>
               <div class="product-details">
                  <div class="ratings-container">
                     <div class="product-ratings">
                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                     </div>
                     <!-- End .product-ratings -->
                  </div>
                  <!-- End .product-container -->
                  <h2 class="product-title">
                     <a href="">Cho Thuê Nhạc Cụ</a>
                  </h2>
                  <div class="product-grid-action">
                     <a href="" class="paction add-cart" title="Xem Chi Tiết">
                     <span>Xem Chi Tiết</span>
                     </a>
                  </div>
                  <!-- End .product-action -->
               </div>
               <!-- End .product-details -->
            </div>
            <!-- End .product -->
         </div>
         <!-- End .col-md-4 -->
         <div class="col-6 col-md-3">
            <div class="grid-product">
               <figure class="product-image-container">
                  <a href="" class="product-image">
                  <img src="assets/images/tcsk.png" alt="product">
                  </a>
                  <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
               </figure>
               <div class="product-details">
                  <div class="ratings-container">
                     <div class="product-ratings">
                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                     </div>
                     <!-- End .product-ratings -->
                  </div>
                  <!-- End .product-container -->
                  <h2 class="product-title">
                     <a href="">Tổ Chức Sự Kiện</a>
                  </h2>
                  <div class="price-box">
                  </div>
                  <!-- End .price-box -->
                  <div class="product-grid-action">
                     <a href="" class="paction add-cart" title="Xem Chi Tiết">
                     <span>Xem Chi Tiết</span>
                     </a>
                  </div>
                  <!-- End .product-action -->
               </div>
               <!-- End .product-details -->
            </div>
            <!-- End .product -->
         </div>
         <!-- End .col-md-4 -->
      </div>
      <!-- End .row -->
   </div>
   <div class="testimonials-section">
      <div class="container">
         <h2 class="subtitle text-center">Ý KIẾN KHÁCH HÀNG</h2>
         <div class="testimonials-carousel owl-carousel owl-theme">
            <div class="testimonial">
               <div class="testimonial-owner">
                  <figure>
                     <img class="img-logo" src="https://cdn.trangcongnghe.com/uploads/posts/2016-11/irene-chang-hotgirl-9x-me-pokemon-go-nhu-dieu-do_3.jpeg"
                        alt="client">
                  </figure>
                  <div>
                     <h4 class="testimonial-title">Trà My</h4>
                     <span>hot girl đà nẵng</span>
                  </div>
               </div>
               <!-- End .testimonial-owner -->
               <blockquote>
                  <p>Tại salem piano em được phục vụ tận tình tư vấn kĩ lưởng e thích nhất a salem đẹp
                     trai
                  </p>
               </blockquote>
            </div>
            <!-- End .testimonial -->
            <div class="testimonial">
               <div class="testimonial-owner">
                  <figure>
                     <img class="img-logo" src="https://cdn.trangcongnghe.com/uploads/posts/2016-11/irene-chang-hotgirl-9x-me-pokemon-go-nhu-dieu-do_3.jpeg"
                        alt="client">
                  </figure>
                  <div>
                     <h4 class="testimonial-title">Trà My</h4>
                     <span>hot girl đà nẵng</span>
                  </div>
               </div>
               <!-- End .testimonial-owner -->
               <blockquote>
                  <p>Tại salem piano em được phục vụ tận tình tư vấn kĩ lưởng e thích nhất a salem đẹp
                     trai
                  </p>
               </blockquote>
            </div>
            <!-- End .testimonial -->
            <div class="testimonial">
               <div class="testimonial-owner">
                  <figure>
                     <img class="img-logo" src="https://cdn.trangcongnghe.com/uploads/posts/2016-11/irene-chang-hotgirl-9x-me-pokemon-go-nhu-dieu-do_3.jpeg"
                        alt="client">
                  </figure>
                  <div>
                     <h4 class="testimonial-title">Trà My</h4>
                     <span>hot girl đà nẵng</span>
                  </div>
               </div>
               <!-- End .testimonial-owner -->
               <blockquote>
                  <p>Tại salem piano em được phục vụ tận tình tư vấn kĩ lưởng e thích nhất a salem đẹp
                     trai
                  </p>
               </blockquote>
            </div>
            <!-- End .testimonial -->
         </div>
         <!-- End .testimonials-slider -->
      </div>
      <!-- End .container -->
   </div>
   <!-- End .testimonials-section -->
</main>
<!-- End .main -->
<!--end nội dung tài -->
@endsection
