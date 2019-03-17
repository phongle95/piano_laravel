<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SALEM PIANO</title>
      <meta name="keywords" content="HTML5 Template" />
      <meta name="description" content="Porto - Bootstrap eCommerce Template">
      <meta name="author" content="SW-THEMES">
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="assets/images/logosalem.png">
      <!-- Plugins CSS File -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Main CSS File -->
      <link rel="stylesheet" href="assets/css/style.min.css">

      <link rel="stylesheet" href="assets/phone-css.css">
   <link rel="stylesheet" href="assets/card">

   </head>
   <body>
      <div class="page-wrapper">
         <!--star-menu-tài -->
         <header class="header ">
            <div class="header-middle">
               <div class="container">
                  <div class="header-left">
                     <a href="{{ route('Pages.trangchu') }}" class="logo">
                     <img src="assets/images/logosalem.png" width="160px" height="100px" alt="salem piano">
                     </a>
                  </div>
                  <!-- End .header-left -->
                  <div class="header-center">
                     <div class="header-search">
                        <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                        <form action="{{ route('Pages.timkiem') }}" method="get">
                                {{--  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>  --}}
                           <div class="header-search-wrapper">
                              <input type="search" class="form-control" name="tukhoa"  placeholder="Tìm kiếm..."
                                 required>
                              <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                           </div>
                           <!-- End .header-search-wrapper -->
                        </form>
                     </div>
                     <!-- End .header-search -->
                  </div>
                  <!-- End .headeer-center -->
                  <div class="header-right">
                     <button class="mobile-menu-toggler" type="button">
                     <i class="icon-menu"></i>
                     </button>
                     <div class="header-contact">
                        <span>Gọi Cho Chúng tôi</span>
                        <a href="tel:#"><strong style="color:#231f20">039 469 0908</strong></a>
                     </div>

                  </div>
                  <!-- End .header-right -->
               </div>
               <!-- End .container -->
            </div>
            <!-- End .header-middle -->
            <div class="header-bottom sticky-header">
               <div class="container">
                  <nav class="main-nav">
                     <ul class="menu sf-arrows">
                        <li class=""><a href="{{ route('Pages.trangchu') }}"></a></li>
                        <li>
                           <a href="{{ route('Pages.sanpham') }}">Sản Phẩm</a>
                        </li>
                        <li>
                           <a href="{{ route('Pages.gioithieu') }}">Giới Thiệu</a>
                        </li>
                        <li>
                            <a href="{{ route('Pages.giaoduc') }}">Giáo Dục</a>
                        </li>
                        <li>
                            <a href="{{ route('Pages.video') }}">Video</a>
                        </li>
                        <li>
                           <a href="" class="sf-with-ul">Dịch Vụ</a>
                           <ul>
                              <li><a href="cart.html">Dịch Vụ Sửa Chửa</a></li>
                              <li><a href="about.html">Tổ Chức Sự Kiện</a></li>
                              <li><a href="{{ route('Pages.gioithieu') }}">Cho Thuê Nhạc Cụ</a></li>
                           </ul>
                        </li>
                        <li><a href="{{ route('Pages.lienhe') }}">Liên Hệ</a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <!-- End .header-bottom -->
            </div>
            <!-- End .header-bottom -->
         </header>
         <!-- End .header -->
         <!--end-menu-tài -->
         @yield('noidung')
         <div class='quick-call-button'></div>
            <div class='call-now-button'>
            <div><p class='call-text'></p>
            <a href='tel:0394690908' title='Gọi ngay' >
            <div class='quick-alo-ph-circle active'></div>
            <div class='quick-alo-ph-circle-fill active'></div>
            <div class='quick-alo-ph-img-circle shake'></div>
            </a>
            </div>
            </div>
         <!--start footer tài -->
         <footer class="footer">
            <div class="footer-middle">
               <div class="container">
                  <div class="footer-ribbon">
                     SALEM PIANO
                  </div>
                  <!-- End .footer-ribbon -->
                  <div class="row">
                     <div class="col-lg-3">
                        <div class="widget">
                           <h4 class="widget-title">Liên hệ với salem piano</h4>
                           <ul class="contact-info">
                              <li>
                                 <span class="contact-info-label">Địa chỉ:</span>172 Châu Thị Vĩnh Tế , Thành
                                 Phố,
                                 Đà Nẵng
                              </li>
                              <li>
                                 <span class="contact-info-label">Phone:</span> <a href="tel:">
                                 + 039 469 0908</a>
                              </li>
                              <li>
                                 <span class="contact-info-label">Email:</span> <a href="">salempiano@.com</a>
                              </li>
                              <li>
                                 <span class="contact-info-label">Hổ Trợ:</span>
                                 Mon - Sun / 6:00AM - 9:00PM
                              </li>
                           </ul>
                        </div>
                        <!-- End .widget -->
                     </div>
                     <!-- End .col-lg-3 -->
                     <div class="col-lg-9">
                        <div class="widget widget-newsletter">
                           <h4 class="widget-title">Đăng ký</h4>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>Đăng ký để nhận được thông tin khuyến mãi mới nhất
                                 </p>
                              </div>
                              <!-- End .col-md-6 -->
                              <div class="col-md-6">
                                 <form action="#">
                                    <input type="email" class="form-control" placeholder="Địa Chỉ Email "
                                       required>
                                    <input type="submit" class="btn" value="Đăng Ký">
                                 </form>
                              </div>
                              <!-- End .col-md-6 -->
                           </div>
                           <!-- End .row -->
                        </div>
                        <!-- End .widget -->
                        <div class="row">
                           <div class="col-md-5">
                              <div class="widget">
                                 <h4 class="widget-title">Menu</h4>
                                 <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                       <ul class="links">
                                          <li><a href="{{ route('Pages.sanpham') }}">Sản Phẩm</a></li>
                                          <li><a href="{{ route('Pages.gioithieu') }}">Giới Thiệu</a></li>
                                          <li><a href="{{ route('Pages.lienhe') }}">Liên Hệ</a></li>
                                       </ul>
                                    </div>
                                    <!-- End .col-sm-6 -->
                                    <!-- End .col-sm-6 -->
                                 </div>
                                 <!-- End .row -->
                              </div>
                              <!-- End .widget -->
                           </div>
                           <!-- End .col-md-5 -->
                           <div class="col-md-7">
                              <div class="widget">
                                 <h4 class="widget-title">Dịch Vụ</h4>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <ul class="links">
                                          <li><a href="#">Cho Thuê Nhạc Cụ</a></li>
                                          <li><a href="#">Tổ Chức Sự Kiện</a></li>
                                          <li><a href="#">Dịch Vụ Sửa Chửa</a></li>
                                       </ul>
                                    </div>
                                    <!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                       <div class="social-icons">
                                          <a href="#" class="social-icon" target="_blank"><i
                                             class="icon-facebook"></i></a>
                                          <a href="#" class="social-icon" target="_blank"><i
                                             class="icon-twitter"></i></a>
                                          <a href="#" class="social-icon" target="_blank"><i
                                             class="icon-linkedin"></i></a>
                                       </div>
                                       <!-- End .social-icons -->
                                    </div>
                                    <!-- End .col-sm-6 -->
                                 </div>
                                 <!-- End .row -->
                              </div>
                              <!-- End .widget -->
                           </div>
                           <!-- End .col-md-7 -->
                        </div>
                        <!-- End .row -->
                     </div>
                     <!-- End .col-lg-9 -->
                  </div>
                  <!-- End .row -->
               </div>
               <!-- End .container -->
            </div>
            <!-- End .footer-middle -->
            <div class="container">
               <div class="footer-bottom">
                  <p class="footer-copyright">VINASS &copy; 2019. All Rights Reserved</p>
                  <img src="assets/images/payments.png" alt="payment methods" class="footer-payments">
               </div>
               <!-- End .footer-bottom -->
            </div>
            <!-- End .container -->
         </footer>
         <!-- End .footer -->
         <!--end footer tài -->
      </div>
      <!--start menu mobile tài -->
      <!-- End .page-wrapper -->
      <div class="mobile-menu-overlay"></div>
      <!-- End .mobil-menu-overlay -->
      <div class="mobile-menu-container">
         <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
               <ul class="mobile-menu">
                  <li>
                     <a href="{{ route('Pages.sanpham') }}">Sản Phẩm</a>
                  </li>
                  <li>
                        <a href="{{ route('Pages.gioithieu') }}">Giới Thiệu</a>
                     </li>
                    <li>
                            <a href="{{ route('Pages.video') }}">Video</a>
                    </li>
                  <li>
                     <a href="{{ route('Pages.giaoduc') }}">Giáo Dục</a>
                  </li>
                  <li>
                     <a href="blog.html">Dịch Vụ</a>
                     <ul>
                        <li><a href="">Dịch Vụ Sửa Chửa</a></li>
                        <li><a href="">Tổ Chức Sự Kiện</a></li>
                        <li><a href="">Cho Thê Nhạc Cụ</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="{{ route('Pages.lienhe') }}">Liên Hệ</a>
                  </li>
               </ul>
            </nav>
            <!-- End .mobile-nav -->
            <div class="social-icons">
               <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
               <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
               <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div>
            <!-- End .social-icons -->
         </div>
         <!-- End .mobile-menu-wrapper -->
      </div>
      <!-- End .mobile-menu-container -->
      <!--start menu mobile tài -->
      <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
      <!-- Plugins JS File -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/plugins.min.js"></script>
      <!-- Main JS File -->
      <script src="assets/js/main.min.js"></script>
   </body>
</html>
