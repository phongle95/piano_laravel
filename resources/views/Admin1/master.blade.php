<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Salem Piano</title>

    <!-- Fontfaces CSS-->
    <link href="/assetsadmin1/css/font-face.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/assetsadmin1/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/assetsadmin1/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assetsadmin1/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assetsadmin1/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a href="{{ route('Pages.trangchu') }}" class="simple-text logo-normal">
                            <img src="/assetsadmin1/images/logo.png" width="130px" height="40px" alt="salem piano">
                            </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class=" has-sub">
                            <a class="" href="{{ route('PageAdmin1.loaisanpham.danhsach') }}">
                                <i class="fas fa-copy"></i>Loại Sản Phẩm</a>

                        </li>
                        <li>
                            <a href="{{ route('PageAdmin1.sanpham.danhsach') }}">
                                <i class="fas fa-music"></i>Sản Phẩm</a>
                        </li>
                        <li>
                            <a href="{{ route('PageAdmin1.menu.danhsach') }}">
                                <i class="fas fa-bars"></i>Menu</a>
                        </li>
                        <li>
                            <a href="{{ route('PageAdmin1.khachhang.danhsach') }}">
                                <i class="fas fa-comment"></i>Đánh Giá</a>
                        </li>
                        <li>
                            <a href="{{ route('PageAdmin1.logout') }}">
                                <i class="fas fa-power-off"></i>Đăng Xuất</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ route('Pages.trangchu') }}" class="simple-text logo-normal">
                    <img src="/assetsadmin1/images/logo.png" width="130px" height="40px" alt="salem piano">
                    </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class=" has-sub">
                            <a class="js-arrow" href="{{ route('PageAdmin1.loaisanpham.danhsach') }}">
                                <i class="fas fa-copy"></i>Loại Sản Phẩm</a>

                        </li>
                        <li>
                            <a href="{{ route('PageAdmin1.sanpham.danhsach') }}">
                                <i class="fas fa-music"></i>Sản Phẩm</a>
                        </li>
                        <li>
                            <a href="{{ route('PageAdmin1.menu.danhsach') }}">
                                <i class="fas fa-bars"></i>Menu</a>
                        </li>
                        <li>
                            <a href="{{ route('PageAdmin1.khachhang.danhsach') }}">
                                <i class="fas fa-comment"></i>Đánh Giá</a>
                        </li>
                        <li>
                            <a href="{{ route('PageAdmin1.logout') }}">
                                <i class="fas fa-power-off"></i>Đăng Xuất</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Tìm Kiếm" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="https://scontent.fdad3-3.fna.fbcdn.net/v/t1.0-1/c0.0.801.801a/14720392_569896939871858_8339416618260070850_n.jpg?_nc_cat=108&_nc_oc=AQntBVoGXIG-OtRmGJ6vx_WZn74SNpPkg-awrLDlAr1ix5EU1b3kfU3qyYUzU7NigUw&_nc_ht=scontent.fdad3-3.fna&oh=d4542948a749eb4596463cfd476d98e3&oe=5D0F89A2" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Salem Piano</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">



                    @yield('noidung')




                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/assetsadmin1/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/assetsadmin1/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assetsadmin1/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/assetsadmin1/vendor/slick/slick.min.js">
    </script>
    <script src="/assetsadmin1/vendor/wow/wow.min.js"></script>
    <script src="/assetsadmin1/vendor/animsition/animsition.min.js"></script>
    <script src="/assetsadmin1/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/assetsadmin1/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assetsadmin1/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/assetsadmin1/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assetsadmin1/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assetsadmin1/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assetsadmin1/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/assetsadmin1/js/main.js"></script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
      <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
      <script>
         CKFinder.setupCKEditor();
         CKEDITOR.replace( 'editor1' );
      </script>
      <script>
        CKFinder.setupCKEditor();
        CKEDITOR.replace( 'editor2' );
     </script>
     <script>
        CKFinder.setupCKEditor();
        CKEDITOR.replace( 'editor3' );
     </script>

      <script type="text/javascript">
        CKEDITOR.replace( 'editor1', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
          });
          CKEDITOR.replace( 'editor2', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
          });
          CKEDITOR.replace( 'editor3', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
          });

    </script>

</body>

</html>
<!-- end document-->
