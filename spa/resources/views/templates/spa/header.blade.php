<!DOCTYPE html>
<html lang="vi">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		@yield('meta')
        <meta name="google-site-verification" content="8qd7SCGVJ_pQVZ1tc2A0PRcHNq5Vrh4RVOtLJa6Ltv0" />
        <link rel=”alternate” href="https://thammyviendana.com" hreflang="vn-vi" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="/templates/spa/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/templates/spa/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
		
		<!-- Structure data -->
		<script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Việt Nam",
                "addressRegion": "TP Đà Nẵng",
                "streetAddress": "455 Trần Hưng Đạo, TP Đà Nẵng"
            },
            "description": "thẩm mỹ viện tại đà nẵng, spa tại đà nẵng, thẩm mỹ viện spa uy tín tại đà nẵng",
            "name": "Thẩm Mỹ Viện Dana",
            "telephone": "0934 734 555"
        }
        </script>
        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Thẩm mỹ viện Dana Beauty SPA",
            "url": "https://thammyviendana.com",
            "sameAs": ["https://www.facebook.com/danabeautyclinicandacademy/"]
        }
        </script>

		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/templates/spa/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/templates/spa/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="/templates/spa/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/templates/spa/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/templates/spa/vendor/magnific-popup/magnific-popup.min.css">


		<!-- Theme CSS -->
		<link rel="stylesheet" href="/templates/spa/css/theme.css">
		<link rel="stylesheet" href="/templates/spa/css/theme-elements.css">
		<link rel="stylesheet" href="/templates/spa/css/theme-blog.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="/templates/spa/vendor/rs-plugin/css/settings.css">


		<!-- Skin CSS -->
		<link rel="stylesheet" href="/templates/spa/css/skins/default.css">
		<style>
			#header .header-nav-main nav > ul > li > a {
				font-size:14px;
				font-weight: 520;
			}
			.thumb-info.thumb-info-bottom-info .thumb-info-title {
				background-color: #0088cc;
			}

			.image-border{
				border: 1px solid #0088cc;
			}

			.text-custom-1{
				font-size:25px;
				font-weight: 600;
				color:#222;
			}
			.text-custom-2{
				font-size:18px;
				font-weight: 600;
				color:#333
			}

			.feature-box-tertiary.feature-box-style-5 .feature-box-icon [class*="fa-"], html .feature-box-tertiary.feature-box-style-5 .feature-box-icon .icons {
			    color: #0088cc;
			}

			@media (max-width: 991px){
				#header .header-nav-main nav > ul li a {
				    font-size: 15px;
				}
			}
			.img-responsive {
			    width: 100%;
			    height: auto;
			    object-fit: cover;
			}
			@media (max-width: 576px){
				.masonry .masonry-item:not(.no-default-style) {
				    width: 50%;
				}
			}
		</style>
		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126454952-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-126454952-4');
        </script>

	</head>
	<body data-spy="scroll" data-target="#navSecondary" data-offset="170">

		<div class="body">
			<div class="bg-color-primary">
				<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
					<div class="header-body border-color-primary header-body-bottom-border">
						<div class="header-top header-top-default bg-dark border-bottom-0">
							<div class="container">
								<div class="header-row py-2">
									<div class="header-column justify-content-start">
										<div class="header-row">
											<nav class="header-nav-top">
												<ul class="nav nav-pills text-uppercase text-2">
													<li class="nav-item nav-item-anim-icon d-none d-md-block">
														<a class="nav-link pl-0" href="{{ route('spa.index.aboutus') }}"><i class="fas fa-angle-right"></i> Giới thiệu</a>
													</li>
													<li class="nav-item nav-item-anim-icon d-none d-md-block">
														<a class="nav-link" href="{{ route('spa.index.contact') }}"><i class="fas fa-angle-right"></i> Liên hệ</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
									<div class="header-column justify-content-end">
										<div class="header-row">
											<nav class="header-nav-top">
												<ul class="nav nav-pills">
													<li class="nav-item">
														<a href="danaspa455@gmail.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> danaspa455@gmail.com</a>
													</li>
													<li class="nav-item">
														<a href="tel:0934734555"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> 0934 734 555</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header-container container">
							<div class="header-row">
								<div class="header-column flex-grow-0">
									<div class="header-row pr-4">
										<div class="header-logo">
											<a href="/">
												<img alt="Dana Spa" width="150" height="50" src="/templates/spa/img/logo.png">
											</a>
										</div>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<div class="header-nav header-nav-links header-nav-bottom-line justify-content-center order-2 order-lg-1 header-nav-line header-nav-bottom-line">
											<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
												<nav class="collapse">
													<ul class="nav nav-pills" id="mainNav">
														<li class="dropdown">
															<a class="dropdown-item {{ request()->is('/') ? 'active' : '' }}" href="/">
																Trang chủ
															</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle {{ request()->is('gioi-thieu') ? 'active' : '' }}" href="{{ route('spa.index.aboutus') }}">
																Giới Thiệu
															</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="{{ route('spa.index.aboutus') }}">Câu chuyện của dana</a></li>
																<li><a class="dropdown-item" href="{{ route('spa.index.picture') }}">Hình ảnh và video</a></li>
															</ul>
														</li>
														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle {{ request()->is('dich-vu*') ? 'active' : '' }}" href="{{ route('spa.service.index') }}">
																Làm Đẹp
															</a>
															<ul class="dropdown-menu">
													@foreach($catpackages as $catp)
																<li class="dropdown-submenu">
																@if($catp->name == "Chăm sóc da" || $catp->name == "Trẻ hóa da")
																	<a class="dropdown-item" href="#"><strong>{{ $catp->name }}</strong><span class="tip tip-primary">hot</span></a>
																@else
																	<a class="dropdown-item" href="#"><strong>{{ $catp->name }}</strong></a>
																@endif
																	<ul class="dropdown-menu">
															@foreach($catp->service as $service)
																		<li><a class="dropdown-item" href="{{ route('spa.service.service', str_slug($service->name)) }}">{{ $service->name }}</a></li>
															@endforeach
																		
																	</ul>
																</li>
													@endforeach
															</ul>
														</li>
														<li class="dropdown">
															<a class="dropdown-item {{ request()->is('day-nghe') ? 'active' : '' }}" href="{{ route('spa.service.learn') }}">
																Dạy nghề
															</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item {{ request()->is('lien-he') ? 'active' : '' }}" href="{{ route('spa.index.contact') }}">
																Liên hệ
															</a>
														</li>
														<li class="dropdown">
															<a class="dropdown-item dropdown-toggle {{ request()->is('blog*') || request()->is('*.html') ? 'active' : '' }}" href="{{ route('spa.news.index') }}">
																Tin tức
															</a>
															<ul class="dropdown-menu">
																@foreach($categorys as $cat)
																<li><a class="dropdown-item" href="{{ route('spa.news.news', str_slug($cat->name)) }}">{{ $cat->name }}</a></li>
																@endforeach
															</ul>
														</li>
													</ul>
												</nav>
											</div>
											<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
												<i class="fas fa-bars"></i>
											</button>
										</div>
										<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
											<div class="header-nav-feature header-nav-features-search d-inline-flex">
												<ul class="header-social-icons social-icons d-none d-sm-block">
													<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
													<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
													<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
			</div>