@extends('Layouts.master')
@section('noidung')
<!-- start nội dung tài -->
<main class="main">
   <img src="https://vietthuong.vn//upload/images/slider/slide.png" alt="salem piano">
   <br>
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
         <h2 class="carousel-title">ĐÀN PIANO UPRIGHT</h2>
         <div class="featured-products owl-carousel owl-theme owl-dots-top">

            @foreach ($upright as $item)


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
                      <a href="tel:0394690908" class="paction add-wishlist" title="gọi ngay cho salem piano">
                      <span>Add to Wishlist</span>
                      </a>
                      <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-cart" title="Mua Sản Phẩm">
                      <span>Mua Sản Phẩm</span>
                      </a>
                      <a href="tel:0394690908" class="paction add-compare" title="gọi ngay cho salem piano">
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
   <!-- margin -->
   <div class="featured-section">
      <div class="container">
         <h2 class="carousel-title">Đàn Piano Grand</h2>
         <div class="featured-products owl-carousel owl-theme owl-dots-top">

                @foreach ($grand as $item)


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
                      <a href="tel:0394690908" class="paction add-wishlist" title="gọi ngay cho salem piano">
                      <span>Add to Wishlist</span>
                      </a>
                      <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-cart" title="Mua Sản Phẩm">
                      <span>Mua Sản Phẩm</span>
                      </a>
                      <a href="tel:0394690908" class="paction add-compare" title="gọi ngay cho salem piano">
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
                      <a href="tel:0394690908" class="paction add-wishlist" title="gọi ngay cho salem piano">
                      <span>Add to Wishlist</span>
                      </a>
                      <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="paction add-cart" title="Mua Sản Phẩm">
                      <span>Mua Sản Phẩm</span>
                      </a>
                      <a href="tel:0394690908" class="paction add-compare" title="gọi ngay cho salem piano">
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
   <div class="testimonials-section">
      <div class="container">
         <h2 class="subtitle text-center">Ý KIẾN KHÁCH HÀNG</h2>
         <div class="testimonials-carousel owl-carousel owl-theme">
            <div class="testimonial">
               <div class="testimonial-owner">
                  <figure>
                     <img class="img-logo"
                        src="https://cdn.trangcongnghe.com/uploads/posts/2016-11/irene-chang-hotgirl-9x-me-pokemon-go-nhu-dieu-do_3.jpeg"
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
                     <img class="img-logo"
                        src="https://cdn.trangcongnghe.com/uploads/posts/2016-11/irene-chang-hotgirl-9x-me-pokemon-go-nhu-dieu-do_3.jpeg"
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
                     <img class="img-logo"
                        src="https://cdn.trangcongnghe.com/uploads/posts/2016-11/irene-chang-hotgirl-9x-me-pokemon-go-nhu-dieu-do_3.jpeg"
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
<!-- start nội dung tài -->
@endsection
