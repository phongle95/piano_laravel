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
                            <div class="owl-lazy slide-bg" data-src="assets/images/1SL.png"></div>
                            <div class="home-slide-content text-white">
                                <br>
                                <h1>Piano Center</h1>
                                <p>Nhập khẩu chính hãng tại nhật bản</p>
                                <a href="" class="btn btn-dark">Chi Tiết</a>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .home-slide -->

                        <div class="home-slide">
                            <div class="owl-lazy slide-bg" data-src="assets/images/1SL.png"></div>
                            <div class="home-slide-content text-white">
                                    <br>
                                    <h1>Piano Center</h1>
                                    <p>Nhập khẩu chính hãng tại nhật bản</p>
                                    <a href="" class="btn btn-dark">Chi Tiết</a>
                                </div><!-- End .home-slide-content -->
                        </div><!-- End .home-slide -->

                        <div class="home-slide">
                            <div class="owl-lazy slide-bg" data-src="assets/images/1SL.png"></div>
                            <div class="home-slide-content text-white">
                                    <br>
                                    <h1>Piano Center</h1>
                                    <p>Nhập khẩu chính hãng tại nhật bản</p>
                                    <a href="" class="btn btn-dark">Chi Tiết</a>
                                </div><!-- End .home-slide-content -->
                        </div><!-- End .home-slide -->
                    </div><!-- End .home-slider -->
                </div><!-- End .col-lg-9 -->

                <div class="col-lg-3 order-lg-first">
                    <div class="side-custom-menu">
                        <h2>TOP Thưowng hiệu</h2>

                        <div class="side-menu-body">
                            <ul>
                            <li><a href="{{route('Pages.sanpham')}}"><img src="https://img.icons8.com/color/28/000000/christmas-star.png">Grand</a></li>
                                <li><a href="{{route('Pages.sanpham')}}"><img src="https://img.icons8.com/color/28/000000/christmas-star.png"> Yamaha</a></li>
                                <li><a href="{{route('Pages.sanpham')}}"><img src="https://img.icons8.com/color/28/000000/christmas-star.png">Steinway & Sons</a></li>
                                <li><a href="{{route('Pages.sanpham')}}"><img src="https://img.icons8.com/color/28/000000/christmas-star.png">Kawai</a></li>
                                <li><a href="{{route('Pages.sanpham')}}"><img src="https://img.icons8.com/color/28/000000/christmas-star.png">Baldwin</a></li>
                                <li><a href="{{route('Pages.sanpham')}}"><img src="https://img.icons8.com/color/28/000000/christmas-star.png">Charles R.Walter</a></li>
                            </ul>

                            <a href="{{route('Pages.sanpham')}}" class="btn btn-block btn-primary">Tất cả sản phẩm</a>
                        </div><!-- End .side-menu-body -->
                    </div><!-- End .side-custom-menu -->
                </div><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .home-top-container -->

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
    <!-- End .featured-section -->
  <!-- End .featured-section -->
  <div class="featured-section">
         <div class="container">
            <h2 class="carousel-title">dịch vụ của salem piano </h2>
            <div class="featured-products owl-carousel owl-theme owl-dots-top">


                 <div class="product">
                         <figure class="product-image-container">
                            <a href="{{ route('Pages.giaoduc') }}" class="product-image">
                            <img src="/assets/images/daynhac.png" alt="salem piano">
                            </a>
                         </figure>
                         <div class="product-details">
                            <div class="ratings-container">
                               <div class="product-ratings">
                                  <span class="ratings" style="width:90%"></span><!-- End .ratings -->
                               </div>
                               <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <h2 class="product-title">
                               <a href="">Giáo Dục</a>
                            </h2>

                            <!-- End .price-box -->
                            <div class="product-action">

                                    <a href="{{ route('Pages.giaoduc') }}"  type="submit" class="btn btn-primary">Chi Tiết</a>

                            </div>
                            <!-- End .product-action -->
                         </div>
                         <!-- End .product-details -->
                      </div>
                      <!-- End .product -->

                      <div class="product">
                             <figure class="product-image-container">
                                <a href="" class="product-image">
                                <img src="assets/images/suachua.png" alt="salem piano">
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
                                   <a href="">Sửa Chữa</a>
                                </h2>

                                <!-- End .price-box -->
                                <div class="product-action">

                                        <a href=""  type="submit" class="btn btn-primary">Chi Tiết</a>

                                </div>
                                <!-- End .product-action -->
                             </div>
                             <!-- End .product-details -->
                          </div>
                          <!-- End .product -->

                          <div class="product">
                                 <figure class="product-image-container">
                                    <a href="" class="product-image">
                                    <img src="assets/images/chothue.png" alt="salem piano">
                                    </a>
                                 </figure>
                                 <div class="product-details">
                                    <div class="ratings-container">
                                       <div class="product-ratings">
                                          <span class="ratings" style="width:90%"></span><!-- End .ratings -->
                                       </div>
                                       <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <h2 class="product-title">
                                       <a href="">Cho Thuê</a>
                                    </h2>

                                    <!-- End .price-box -->
                                    <div class="product-action">

                                            <a href=""  type="submit" class="btn btn-primary">Chi Tiết</a>

                                    </div>
                                    <!-- End .product-action -->
                                 </div>
                                 <!-- End .product-details -->
                              </div>
                              <!-- End .product -->

                              <div class="product">
                                     <figure class="product-image-container">
                                        <a href="" class="product-image">
                                        <img src="assets/images/tcsk.png" alt="salem piano">
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
                                           <a href="">Tổ Chức Sự Kiện</a>
                                        </h2>

                                        <!-- End .price-box -->
                                        <div class="product-action">

                                                <a href=""  type="submit" class="btn btn-primary">Chi Tiết</a>

                                        </div>
                                        <!-- End .product-action -->
                                     </div>
                                     <!-- End .product-details -->
                                  </div>
                                  <!-- End .product -->


            </div>
            <!-- End .featured-proucts -->
         </div>
         <!-- End .container -->
      </div>
      <!-- End .featured-section -->






    <div class="testimonials-section">
       <div class="container">
          <h2 class="subtitle text-center">Ý KIẾN KHÁCH HÀNG</h2>
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
<!--end nội dung tài -->
@endsection
