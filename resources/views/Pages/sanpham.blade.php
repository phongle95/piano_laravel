@extends('Layouts.master')
@section('noidung')
<!-- start nội dung tài -->
<main class="main">
   <img src="assets/images/sanpham.jpg" alt="salem piano">
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

   <!-- margin -->
   <div class="featured-section">
      <div class="container">
         <h2 class="carousel-title text-center">Đàn Piano Grand</h2>
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
         </div>
         <!-- End .featured-proucts -->
      </div>
      <!-- End .container -->
   </div>
   <!-- End .featured-section -->
   <div class="featured-section">
        <div class="container">
           <h2 class="carousel-title text-center">ĐÀN PIANO UPRIGHT</h2>
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


           </div>
           <!-- End .featured-proucts -->
        </div>
        <!-- End .container -->
     </div>
     <!-- End .featured-section -->

     <div class="featured-section">
            <div class="container">
               <h2 class="carousel-title text-center">ĐÀN PIANO ĐIỆN</h2>
               <div class="featured-products owl-carousel owl-theme owl-dots-top">

                  @foreach ($digital as $item)


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


               </div>
               <!-- End .featured-proucts -->
            </div>
            <!-- End .container -->
         </div>
         <!-- End .featured-section -->

   <div class="featured-section">
      <div class="container">
         <h2 class="carousel-title text-center">Đàn Guitar HOT</h2>
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
         </div>
         <!-- End .featured-proucts -->
      </div>
      <!-- End .container -->
   </div>

   <div class="testimonials-section">
        <div class="container">
           <h2 class="subtitle text-center ">Ý KIẾN KHÁCH HÀNG</h2>
           <div class="testimonials-carousel owl-carousel owl-theme">
               @foreach ($khachhang as $item)

                 <div class="testimonial">
                     <div class="testimonial-owner">
                     <figure>
                         <img class="img-logo" src="/upload/{{ $item->img }}"
                             alt="client">
                     </figure>
                     <div>
                         <h4 class="testimonial-title">{{ $item->tenKH }}</h4>
                         <span>{{ $item->diaChi }}</span>
                     </div>
                     </div>
                     <!-- End .testimonial-owner -->
                     <blockquote>
                     <p>
                         {{ $item->danhGia }}
                     </p>
                     </blockquote>
                 </div>
                 <!-- End .testimonial -->
              @endforeach

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
