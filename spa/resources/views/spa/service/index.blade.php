@extends('templates.spa.master')
@section('content')
<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 4000, 'gridwidth': 1170, 'gridheight': 400, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class="" data-transition="fade">
								<img src="/templates/spa/img/tham-my/slide/slide-1.png"
									alt="Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>
							<li class="" data-transition="fade">
								<img src="/templates/spa/img/tham-my/slide/slide-2.png"
									alt="Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>
							<li class="" data-transition="fade">
								<img src="/templates/spa/img/tham-my/slide/slide-3.png"
									alt="Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Intro-->
				<div class="home-intro home-intro-primary mb-0" id="home-intro">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<p class="mb-0">
									Thẩm mỹ viện, SPA và chăm sóc da <strong>Uy tín nhất</strong> tại đà nẵng
									<span>100% khách hàng hài lòng với dịch vụ của chúng tôi</span>
								</p>
							</div>
						</div>

					</div>
				</div>
				<!-- End Intro-->
				
				<section class="section pt-0 my-0 pb-0 min-height-screen border-0 bg-color-light-scale-3 mt-0" id="demos">
					<div class="container-fluid">
						<div class="row justify-content-center py-4 py-sm-0 bg-color-dark-scale-2">
							<div class="col-auto col-sm-12 col-md-auto">
								<ul class="nav nav-light nav-active-style-1 sort-source justify-content-center flex-column flex-sm-row" data-sort-id="portfolio" data-option-key="filter">
									<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Tất cả</a></li>
									<li class="nav-item" data-option-value=".dieu-tri-da"><a class="nav-link" href="#">Spa & Điều trị da</a></li>
									<li class="nav-item" data-option-value=".tre-hoa-da"><a class="nav-link" href="#">Trẻ Hóa Da </a></li>
									<li class="nav-item" data-option-value=".cham-soc-co-the"><a class="nav-link" href="#">Chăm Sóc Cơ Thể</a></li>
									<li class="nav-item" data-option-value=".tham-my-ngoai-khoa"><a class="nav-link" href="#">Thẩm Mỹ</a></li>
									<li class="nav-item" data-option-value=".phun-thieu-tham-my"><a class="nav-link" href="#">Phun Thiêu Thẩm Mỹ</a></li>
								</ul>
							</div>
						</div>

						<div class="row min-height-screen bg-color-light">
							<div class="col min-height-screen">
								<div class="sort-destination-loader min-height-screen mt-5 pt-2">
									<div class="row portfolio-list sort-destination overflow-visible" data-sort-id="portfolio">
									<!-- Điều Trị Da -->
									@php 
										$c = "dieu-tri-da";
										$color = "#70f";
									 @endphp
									@foreach($services as $service)
									@php	
										$id = $service->id;
										$class = $service->catpackage->name;
										if($class == "Spa & Điều trị da"){
											$c = "dieu-tri-da";
											$color = "#70f";
										}elseif($class == "Trẻ hóa da" || $class == "Chăm sóc da"){
											$c = "tre-hoa-da";
											$color = "#0088CC";
										}elseif($class == "Chăm sóc cơ thể"){
											$c = "cham-soc-co-the";
											$color = "#F200A1";
										}elseif($class == "Thẩm mỹ ngoại khoa" || $class == "Thẩm mỹ nội khoa"){
											$c = "tham-my-ngoai-khoa";
											$color = "#0A7812f";
										}elseif($class == "Phun thiêu thẩm mỹ"){
											$c = "phun-thieu-tham-my";
											$color = "#E2C912";
										}
									@endphp
										<div class="col-12 col-sm-6 col-lg-4 col-xl-3 isotope-item {{ $c }}">
											<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
												<div class="portfolio-item hover-effect-1">
														<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
															<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
																<span class="thumb-info-wrapper">
																	<a href="{{ route('spa.service.service', str_slug($service->name)) }}"><img src="/upload/{{ $service->img }}" class="img-fluid" alt="{{ $service->title }}"></a>
																	<span class="thumb-info-title">
																		<span class="thumb-info-inner">{{ $service->name }}</span>
																		<span class="thumb-info-type" style="background-color: {{ $color }};" >{{ $class }}</span>
																	</span>
																</span>
															</span>
														</div>
													<h2 class="font-weight-semibold text-3 text-center"><a href="index-classic.html" class="text-color-light text-decoration-none text-1 text-uppercase">Điều Trị Thâm Mụn</a></h2>
												</div>
											</div>
										</div>
									@endforeach
									<!--End Phun Thiêu thẩm mỹ -->
									</div>
								</div>
							</div>
						</div>
						<div class="row my-4 bg-color-dark-scale-3 pb-5 p-relative z-index-1">
							<div class="col text-center mt-3 mb-5">
								<p>Sure! <strong class="text-color-light">Tất cả dịch vụ của chúng tôi</strong>, liên hệ ngay để được tư vấn miễn phí.</p>
								<a href="{{ route('spa.index.contact') }}" class="btn btn-light-2 btn-outline btn-rounded btn-xl font-weight-semibold text-2 px-5 py-3 box-shadow-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="800">Liên hệ</a>
							</div>
						</div>
					</div>
				</section>
			</div>
@stop
@section('meta')
<title>Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng</title>
		<meta name="keywords" content="spa da nang, tham my vien da nang, da nang spa, cham soc da, giam mo bung" />
		<meta name="description" content='Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ' />

		<meta property="og:title" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta property="og:description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng sử dụng mỹ phẩm cao cấp trên thế giới" />
		<meta property="og:image" content= "/templates/spa/img/bg-2.jpg" />

		<meta itemprop="name" content="Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta itemprop="description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài" />
		<meta itemprop="image" content= "/templates/spa/img/bg-2.jpg" />
@stop