<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="/assetsadmin/img/apple-icon.png">
      <link rel="icon" type="image/png" href="assetsadmin/img/logo.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>
         Admin Salem Piano
      </title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <!-- CSS Files -->
      <link href="/assetsadmin/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="/assetsadmin/demo/demo.css" rel="stylesheet" />

      <style>
            /*the container must be positioned relative:*/
            .custom-select {
              position: relative;
              font-family: Arial;
            }

            .custom-select select {
              display: none; /*hide original SELECT element:*/
            }

            .select-selected {
              background-color: DodgerBlue;
            }

            /*style the arrow inside the select element:*/
            .select-selected:after {
              position: absolute;
              content: "";
              top: 14px;
              right: 10px;
              width: 0;
              height: 0;
              border: 6px solid transparent;
              border-color: #fff transparent transparent transparent;
            }

            /*point the arrow upwards when the select box is open (active):*/
            .select-selected.select-arrow-active:after {
              border-color: transparent transparent #fff transparent;
              top: 7px;
            }

            /*style the items (options), including the selected item:*/
            .select-items div,.select-selected {
              color: #ffffff;
              padding: 8px 16px;
              border: 1px solid transparent;
              border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
              cursor: pointer;
              user-select: none;
            }

            /*style items (options):*/
            .select-items {
              position: absolute;
              background-color: DodgerBlue;
              top: 100%;
              left: 0;
              right: 0;
              z-index: 99;
            }

            /*hide the items when the select box is closed:*/
            .select-hide {
              display: none;
            }

            .select-items div:hover, .same-as-selected {
              background-color: rgba(0, 0, 0, 0.1);
            }
            </style>

   </head>
   <body class="">
      <div class="wrapper ">
         <div class="sidebar" data-color="purple" data-background-color="white" data-image="/assetsadmin/img/sidebar-1.jpg">
            <!--
               Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

               Tip 2: you can also add an image using data-image tag
               -->
            <div class="logo">
               <a href="{{ route('Pages.trangchu') }}" class="simple-text logo-normal">
               <img src="/assetsadmin/img/logo.png" width="130px" height="40px" alt="salem piano">
               </a>
            </div>
            <div class="sidebar-wrapper">
               <ul class="nav">
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ route('PageAdmin.loaisanpham.danhsach') }}">
                        <i class="material-icons">content_paste</i>
                        <p>Danh sách loại sản phẩm</p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="{{ route('PageAdmin.sanpham.danhsach') }}">
                        <i class="material-icons">library_books</i>
                        <p>Danh sách sản phẩm</p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="">
                        <i class="material-icons">notifications</i>
                        <p>Thông báo</p>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="https://www.google.com.vn">
                        <i class="material-icons">language</i>
                        <p>Google</p>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
               <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end">
                     <form class="navbar-form">
                        <div class="input-group no-border">
                           <input type="text" value="" class="form-control" placeholder="Search...">
                           <button type="submit" class="btn btn-white btn-round btn-just-icon">
                              <i class="material-icons">search</i>
                              <div class="ripple-container"></div>
                           </button>
                        </div>
                     </form>
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="#pablo">
                              <i class="material-icons">dashboard</i>
                              <p class="d-lg-none d-md-block">
                                 Stats
                              </p>
                           </a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">notifications</i>
                              <span class="notification">5</span>
                              <p class="d-lg-none d-md-block">
                                 Some Actions
                              </p>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Mike John responded to your email</a>
                              <a class="dropdown-item" href="#">You have 5 new tasks</a>
                              <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                              <a class="dropdown-item" href="#">Another Notification</a>
                              <a class="dropdown-item" href="#">Another One</a>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">person</i>
                              <p class="d-lg-none d-md-block">
                                 Account
                              </p>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                              <a class="dropdown-item" href="#">Profile</a>
                              <a class="dropdown-item" href="#">Settings</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Log out</a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
            @yield('noidung')
         </div>
      </div>
      <div class="fixed-plugin">
         <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
               <li class="header-title"> Sidebar Filters</li>
               <li class="adjustments-line">
                  <a href="javascript:void(0)" class="switch-trigger active-color">
                     <div class="badge-colors ml-auto mr-auto">
                        <span class="badge filter badge-purple" data-color="purple"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-warning" data-color="orange"></span>
                        <span class="badge filter badge-danger" data-color="danger"></span>
                        <span class="badge filter badge-rose active" data-color="rose"></span>
                     </div>
                     <div class="clearfix"></div>
                  </a>
               </li>
               <li class="header-title">Images</li>
               <li class="active">
                  <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="/assetsadmin/img/sidebar-1.jpg" alt="">
                  </a>
               </li>
               <li>
                  <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="/assetsadmin/img/sidebar-2.jpg" alt="">
                  </a>
               </li>
               <li>
                  <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="/assetsadmin/img/sidebar-3.jpg" alt="">
                  </a>
               </li>
               <li>
                  <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="/assetsadmin/img/sidebar-4.jpg" alt="">
                  </a>
               </li>
               <li class="button-container">
                  <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
               </li>
               <!-- <li class="header-title">Want more components?</li>
                  <li class="button-container">
                      <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                        Get the pro version
                      </a>
                  </li> -->
               <li class="button-container">
                  <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
                  View Documentation
                  </a>
               </li>
               <li class="button-container github-star">
                  <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
               </li>
               <li class="header-title">Thank you for 95 shares!</li>
               <li class="button-container text-center">
                  <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
                  <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
                  <br>
                  <br>
               </li>
            </ul>
         </div>
      </div>
      <!--   Core JS Files   -->
      <script src="/assetsadmin/js/core/jquery.min.js"></script>
      <script src="/assetsadmin/js/core/popper.min.js"></script>
      <script src="/assetsadmin/js/core/bootstrap-material-design.min.js"></script>
      <script src="/assetsadmin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <!-- Plugin for the momentJs  -->
      <script src="/assetsadmin/js/plugins/moment.min.js"></script>
      <!--  Plugin for Sweet Alert -->
      <script src="/assetsadmin/js/plugins/sweetalert2.js"></script>
      <!-- Forms Validations Plugin -->
      <script src="/assetsadmin/js/plugins/jquery.validate.min.js"></script>
      <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
      <script src="/assetsadmin/js/plugins/jquery.bootstrap-wizard.js"></script>
      <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
      <script src="/assetsadmin/js/plugins/bootstrap-selectpicker.js"></script>
      <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
      <script src="/assetsadmin/js/plugins/bootstrap-datetimepicker.min.js"></script>
      <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
      <script src="/assetsadmin/js/plugins/jquery.dataTables.min.js"></script>
      <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
      <script src="/assetsadmin/js/plugins/bootstrap-tagsinput.js"></script>
      <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
      <script src="/assetsadmin/js/plugins/jasny-bootstrap.min.js"></script>
      <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
      <script src="/assetsadmin/js/plugins/fullcalendar.min.js"></script>
      <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
      <script src="/assetsadmin/js/plugins/jquery-jvectormap.js"></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="/assetsadmin/js/plugins/nouislider.min.js"></script>
      <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
      <!-- Library for adding dinamically elements -->
      <script src="/assetsadmin/js/plugins/arrive.min.js"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Chartist JS -->
      <script src="/assetsadmin/js/plugins/chartist.min.js"></script>
      <!--  Notifications Plugin    -->
      <script src="/assetsadmin/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="/assetsadmin/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
      <!-- Material Dashboard DEMO methods, don't include it in your project! -->
      <script src="/assetsadmin/demo/demo.js"></script>
      <script>
         $(document).ready(function() {
           $().ready(function() {
             $sidebar = $('.sidebar');

             $sidebar_img_container = $sidebar.find('.sidebar-background');

             $full_page = $('.full-page');

             $sidebar_responsive = $('body > .navbar-collapse');

             window_width = $(window).width();

             fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

             if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
               if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                 $('.fixed-plugin .dropdown').addClass('open');
               }

             }

             $('.fixed-plugin a').click(function(event) {
               // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
               if ($(this).hasClass('switch-trigger')) {
                 if (event.stopPropagation) {
                   event.stopPropagation();
                 } else if (window.event) {
                   window.event.cancelBubble = true;
                 }
               }
             });

             $('.fixed-plugin .active-color span').click(function() {
               $full_page_background = $('.full-page-background');

               $(this).siblings().removeClass('active');
               $(this).addClass('active');

               var new_color = $(this).data('color');

               if ($sidebar.length != 0) {
                 $sidebar.attr('data-color', new_color);
               }

               if ($full_page.length != 0) {
                 $full_page.attr('filter-color', new_color);
               }

               if ($sidebar_responsive.length != 0) {
                 $sidebar_responsive.attr('data-color', new_color);
               }
             });

             $('.fixed-plugin .background-color .badge').click(function() {
               $(this).siblings().removeClass('active');
               $(this).addClass('active');

               var new_color = $(this).data('background-color');

               if ($sidebar.length != 0) {
                 $sidebar.attr('data-background-color', new_color);
               }
             });

             $('.fixed-plugin .img-holder').click(function() {
               $full_page_background = $('.full-page-background');

               $(this).parent('li').siblings().removeClass('active');
               $(this).parent('li').addClass('active');


               var new_image = $(this).find("img").attr('src');

               if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                 $sidebar_img_container.fadeOut('fast', function() {
                   $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                   $sidebar_img_container.fadeIn('fast');
                 });
               }

               if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                 var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                 $full_page_background.fadeOut('fast', function() {
                   $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                   $full_page_background.fadeIn('fast');
                 });
               }

               if ($('.switch-sidebar-image input:checked').length == 0) {
                 var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                 var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                 $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                 $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
               }

               if ($sidebar_responsive.length != 0) {
                 $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
               }
             });

             $('.switch-sidebar-image input').change(function() {
               $full_page_background = $('.full-page-background');

               $input = $(this);

               if ($input.is(':checked')) {
                 if ($sidebar_img_container.length != 0) {
                   $sidebar_img_container.fadeIn('fast');
                   $sidebar.attr('data-image', '#');
                 }

                 if ($full_page_background.length != 0) {
                   $full_page_background.fadeIn('fast');
                   $full_page.attr('data-image', '#');
                 }

                 background_image = true;
               } else {
                 if ($sidebar_img_container.length != 0) {
                   $sidebar.removeAttr('data-image');
                   $sidebar_img_container.fadeOut('fast');
                 }

                 if ($full_page_background.length != 0) {
                   $full_page.removeAttr('data-image', '#');
                   $full_page_background.fadeOut('fast');
                 }

                 background_image = false;
               }
             });

             $('.switch-sidebar-mini input').change(function() {
               $body = $('body');

               $input = $(this);

               if (md.misc.sidebar_mini_active == true) {
                 $('body').removeClass('sidebar-mini');
                 md.misc.sidebar_mini_active = false;

                 $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

               } else {

                 $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                 setTimeout(function() {
                   $('body').addClass('sidebar-mini');

                   md.misc.sidebar_mini_active = true;
                 }, 300);
               }

               // we simulate the window Resize so the charts will get updated in realtime.
               var simulateWindowResize = setInterval(function() {
                 window.dispatchEvent(new Event('resize'));
               }, 180);

               // we stop the simulation of Window Resize after the animations are completed
               setTimeout(function() {
                 clearInterval(simulateWindowResize);
               }, 1000);

             });
           });
         });
      </script>
      <script>
         $(document).ready(function() {
           // Javascript method's body can be found in assetsadmin/js/demos.js
           md.initDashboardPageCharts();

         });
      </script>
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

     <script type="text/javascript">
         CKEDITOR.replace( 'editor1', {
           filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
           filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
           filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
           filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
           filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
           filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
         });
     </script>

      <script type="text/javascript">
         CKEDITOR.replace( 'editor2', {
           filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
           filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
           filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
           filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
           filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
           filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
         });
     </script>

     <script>
            var x, i, j, selElmnt, a, b, c;
            /*look for any elements with the class "custom-select":*/
            x = document.getElementsByClassName("custom-select");
            for (i = 0; i < x.length; i++) {
              selElmnt = x[i].getElementsByTagName("select")[0];
              /*for each element, create a new DIV that will act as the selected item:*/
              a = document.createElement("DIV");
              a.setAttribute("class", "select-selected");
              a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
              x[i].appendChild(a);
              /*for each element, create a new DIV that will contain the option list:*/
              b = document.createElement("DIV");
              b.setAttribute("class", "select-items select-hide");
              for (j = 1; j < selElmnt.length; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < s.length; i++) {
                      if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                          y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                      }
                    }
                    h.click();
                });
                b.appendChild(c);
              }
              x[i].appendChild(b);
              a.addEventListener("click", function(e) {
                  /*when the select box is clicked, close any other select boxes,
                  and open/close the current select box:*/
                  e.stopPropagation();
                  closeAllSelect(this);
                  this.nextSibling.classList.toggle("select-hide");
                  this.classList.toggle("select-arrow-active");
                });
            }
            function closeAllSelect(elmnt) {
              /*a function that will close all select boxes in the document,
              except the current select box:*/
              var x, y, i, arrNo = [];
              x = document.getElementsByClassName("select-items");
              y = document.getElementsByClassName("select-selected");
              for (i = 0; i < y.length; i++) {
                if (elmnt == y[i]) {
                  arrNo.push(i)
                } else {
                  y[i].classList.remove("select-arrow-active");
                }
              }
              for (i = 0; i < x.length; i++) {
                if (arrNo.indexOf(i)) {
                  x[i].classList.add("select-hide");
                }
              }
            }
            /*if the user clicks anywhere outside the select box,
            then close all select boxes:*/
            document.addEventListener("click", closeAllSelect);
            </script>

   </body>
</html>
