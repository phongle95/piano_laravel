@extends('templates.spa.master')
@section('content')
	<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 550px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 8000, 'gridwidth': 1170, 'gridheight': 550, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							<li class="slide-overlay slide-overlay-dark slide-overlay-level-6" data-transition="fade">
								<img src="/templates/spa/img/bg-1.jpg"  
									alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">BẠN MUỐN TÌM MỘT</div>

								<div class="tp-caption d-none d-md-block"
									data-frames='[{"delay":2200,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['80','80','80','135']"
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="/templates/spa/img/slides/slide-white-line.png" alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">BEAUTY SPA?</h1>

								<div class="tp-caption text-light font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']">Hãy đến với chúng tôi Dana Beauty</div>
								
							</li>
							<li class="slide-overlay slide-overlay-dark slide-overlay-level-6" data-transition="fade">
								<img src="/templates/spa/img/bg-2.jpg"  
									alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-145','-145','-145','-320']"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-80','-80','-80','-130']"
									data-start="700"
									data-fontsize="['16','16','16','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">Chúng tôi chuyên sử dụng những dòng mỹ phẩm nổi tiếng trên thế giới</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['-180','-180','-180','-300']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">DANA</div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":2300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['180','190','190','290']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']"> </div>

								<div class="tp-caption font-weight-extra-bold text-color-light"
									data-frames='[{"delay":2300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['180','190','190','290']"
									data-y="center"
									data-fontsize="['145','145','145','250']"
									data-lineheight="['150','150','150','260']">BEAUTY</div>

								<div class="tp-caption font-weight-light text-color-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['85','85','85','140']"
									data-fontsize="['18','18','18','40']"
									data-lineheight="['26','26','26','45']">Hãy đến với chúng tôi</div>
							</li>
							<li class="slide-overlay slide-overlay-dark slide-overlay-level-6" data-transition="fade">
								<img src="/templates/spa/img/bg-3.jpg"  
									alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-150','-150','-150','-240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">Chúng tôi luôn sử dụng những công nghệ tiên tiến nhất</div>

								<div class="tp-caption d-none d-md-block"
									data-frames='[{"delay":2200,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center" data-hoffset="['80','80','80','135']"
									data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="/templates/spa/img/slides/slide-white-line.png" alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"></div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['150','150','150','240']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="/templates/spa/img/slides/slide-title-border.png" alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"></div>

								<h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">DANA BEAUTY</h1>

								<div class="tp-caption text-light font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']">Liên hệ ngay để được tư vấn miễn phí</div>	
							</li>
						</ul>
					</div>
				</div>
				<!-- End Slider -->

				<!-- Start Intro-->
				<div class="home-intro home-intro-primary" id="home-intro" style="margin-bottom:20px;">
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
				<div class="container mb-5">
					<div class="row justify-content-center">
						<div class="col-xl-8 text-center mb-4">
							<p class="font-weight-bold text-8 mb-3 appear-animation text-color-primary" data-appear-animation="fadeIn">Các điều trị nổi bật</p>
							<p class="line-height-9 text-4 appear-animation text-color-primary" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><span class="opacity-9">Đã là phụ nữ thì ai cũng có quyền đẹp và được làm đẹp. Phụ nữ sinh ra vốn đã mang trong mình vẻ đẹp và dấu ấn riêng mà không ai khác có thể có được. Hiểu được ý nghĩa thiêng liêng của việc làm đẹp đối với chị em phụ nữ, Dana mang trong mình sứ mệnh “khơi dậy vẻ đẹp vốn có của người phụ nữ, và biến nó trở nên tỏa sáng hơn bao giờ hết”.</span></p>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="owl-carousel owl-theme show-nav-hover" data-plugin-options="{'items': 4, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">

							@foreach($getservices as $getservice)
@php	
	$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
@endphp
								<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
									<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
										<span class="thumb-info-wrapper">
											<a href="{{ route('spa.service.service', str_slug($getservice->name)) }}"><img src="/upload/{{ $getservice->img }}" class="img-fluid" alt="{{ $getservice->title }}"></a>
											<span class="thumb-info-title">
												<span class="thumb-info-inner">{{ $getservice->name }}</span>
												<span class="thumb-info-type" style="background-color: {{ $color }}" >{{ $getservice->catpackage->name }}</span>
											</span>
										</span>
									</span>
								</div>
							@endforeach
							</div>

							</div>
						</div>

					<div class="container">
    					<div class="row pt-4 mt-5">
    						<div class="col">
    							<div class="row pt-2 clearfix">
    								<div class="col-lg-6">
    									<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
    										<div class="feature-box-icon" style="top:50px">
    											<i class="fas fa-hospital icons text-color-primary"></i>
    										</div>
    										<div class="feature-box-info">
    											<p class="mb-2 text-center font-weight-bold text-6 text-color-dark">Thiết bị hiện đại</p>
    											<p class="mb-4 text-4">Dana được chuyển giao các loại máy công nghệ cao, tiên tiến nhất trong lĩnh vực thẩm mỹ của thế giới, được chứng nhận ISO 9000, chứng nhận FDA Hoa Kì, CE chứng nhận đạt tiêu chuẩn Châu Âu.</p>
    										</div>
    									</div>
    								</div>
    								<div class="col-lg-6">
    									<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
    										<div class="feature-box-icon" style="top:50px">
    											<i class="fas fa-spa icons text-color-primary"></i>
    										</div>
    										<div class="feature-box-info">
    											<p class="mb-2 text-center font-weight-bold text-6 text-color-dark">Mỹ phẩm cao cấp</p>
    											<p class="mb-4 text-4">Tất cả các dòng Sản phẩm sử dụng tại Dana Beauty đều có thành phần chiết xuất từ thảo dược thiên nhiên, của các hãng Mỹ phẩm lớn như Maystar của Tây Ban Nha, Bạch Linh,….</p>
    										</div>
    									</div>
    								</div>
    							</div>
    							<div class="row">
    								<div class="col-lg-6">
    									<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
    										<div class="feature-box-icon" style="top:50px">
    											<i class="fas fa-user-md icons text-color-primary"></i>
    										</div>
    										<div class="feature-box-info">
    											<p class="mb-2 text-center font-weight-bold text-6 text-color-dark">Bác sĩ nước ngoài</p>
    											<p class="mb-4 text-4">Dana Beauty chuyên có 1 đội ngũ bác sĩ nước ngoài thường xuyên về Việt Nam để bàn giao những công nghệ mới nhất trên thế giới. Vì vậy Dana Beauty luôn cập nhật những sản phẩm tiên tiến nhất để phục vụ khách hàng.</p>
    										</div>
    									</div>
    								</div>
    								<div class="col-lg-6">
    									<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
    										<div class="feature-box-icon" style="top:50px">
    											<i class="fas fa-headphones icons text-color-primary"></i>
    										</div>
    										<div class="feature-box-info">
    											<p class="mb-2 text-center font-weight-bold text-6 text-color-dark">Tư vấn chuyên nghiệp</p>
    											<p class="mb-4 text-4">Một đội ngũ nhân viên luôn được cập nhật học hỏi những kiến thức mới, những ứng dụng công nghệ tiến tiến của nghành thẩm mỹ thế giới từ các chuyên gia thẩm mỹ trong và ngoài nước</p>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
				    </div>
				</div>


				<section class="section section-primary border-0 py-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container">
						<div class="row align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
							<div class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-5 mt-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<p class="font-weight-bold text-color-light text-7 mb-2 text-center">Thẩm mỹ viện Dana</p>
								<p class="lead font-weight-light text-color-light text-4">Chúng tôi tự tin là đối tác tin cậy của các bạn trong các lĩnh vực làm đẹp.</p>
								<p class="lead font-weight-light text-color-light text-4">Đã là phụ nữ thì ai cũng có quyền đẹp và được làm đẹp. Phụ nữ sinh ra vốn đã mang trong mình vẻ đẹp và dấu ấn riêng mà không ai khác có thể có được. Hiểu được ý nghĩa thiêng liêng của việc làm đẹp đối với chị em phụ nữ, Dana Beauty mang trong mình sứ mệnh “khơi dậy vẻ đẹp vốn có của người phụ nữ”.</p>
								
							</div>
							<div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2 scale-2">
								<img class="img-fluid box-shadow-3 my-2 border-radius" src="/templates/spa/img/hinh-dana-team.jpg" alt="đội ngũ nhân viên thẩm mỹ viện đà nẵng">
							</div>
						</div>
					</div>
				</section>


				<!-- Our Doctor -->
				<div class="container">
					<div class="row py-5 my-5">
						<div class="col-lg-6 order-2 order-md-1 text-center appear-animation mt-2 pt-1" data-appear-animation="fadeInRightShorter">
						    <div class="embed-responsive embed-responsive-16by9 shadow rounded"">
						  	    <iframe width="560" height="315" src="https://www.youtube.com/embed/NR1sWCmQMxI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						    </div>
						</div>
						<div class="col-lg-6 order-1 order-md-2 text-center text-lg-left mb-5 mb-md-0 appear-animation my-auto" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
							<p class="text-color-primary font-weight-normal text-6 mb-2">Hãy đặt hẹn ngay cho các <strong class="font-weight-extra-bold">Bác Sĩ</strong> và các <strong class="font-weight-extra-bold">chuyên gia</strong> để được tư vấn</p>
							<p class="lead text-color-primary">Đội ngũ bác sĩ đến từ nước ngoài có nhiều năm kinh nghiệm trong nghề. Đội ngũ tư vấn viên nhiệt tình với sự tư vấn ở nhiều phương tiện khác nhau: Điện thoại, messenger... Chúng tôi hỗ trợ quý khách 24/7 rất hân hạnh được phục vụ các bạn</p>
							<center><a href="/lien-he" class="btn btn-rounded btn-primary box-shadow-2 mb-2 font-weight-semibold btn-px-4 btn-py-2 text-2">Đặt hẹn</a></center>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="owl-carousel owl-theme show-nav-hover" data-plugin-options="{'items': 4, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
								<div>
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
										<img src="/templates/spa/img/tham-my/dich-vu/cham-soc-da-thai-doc-to-1.png" class="img-fluid" alt="Chăm sóc da thải độc tố da">
										<p class="font-weight-bold text-color-dark text-4 mb-0 text-center pt-2">Julie Doe</h3>
									    <p class="text-3 mb-0 text-center">Bác sĩ điều dưỡng</p>	
									</span>
								</div>
								<div>
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
										<img src="/templates/spa/img/tham-my/dich-vu/cham-soc-da-thai-doc-to-1.png" class="img-fluid" alt="Chăm sóc da thải độc tố da">
										<p class="font-weight-bold text-color-dark text-4 mb-0 text-center pt-2">Julie Doe</h3>
									    <p class="text-3 mb-0 text-center">Bác sĩ điều dưỡng</p>	
									</span>
								</div>
								<div>
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
										<img src="/templates/spa/img/tham-my/dich-vu/cham-soc-da-thai-doc-to-1.png" class="img-fluid" alt="Chăm sóc da thải độc tố da">
										<p class="font-weight-bold text-color-dark text-4 mb-0 text-center pt-2">Julie Doe</h3>
									    <p class="text-3 mb-0 text-center">Bác sĩ điều dưỡng</p>	
									</span>
								</div>
								<div>
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
										<img src="/templates/spa/img/tham-my/dich-vu/cham-soc-da-thai-doc-to-1.png" class="img-fluid" alt="Chăm sóc da thải độc tố da">
										<p class="font-weight-bold text-color-dark text-4 mb-0 text-center pt-2">Julie Doe</h3>
									    <p class="text-3 mb-0 text-center">Bác sĩ điều dưỡng</p>	
									</span>
								</div>
								<div>
									<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
										<img src="/templates/spa/img/tham-my/dich-vu/cham-soc-da-thai-doc-to-1.png" class="img-fluid" alt="Chăm sóc da thải độc tố da">
										<p class="font-weight-bold text-color-dark text-4 mb-0 text-center pt-2">Julie Doe</h3>
									    <p class="text-3 mb-0 text-center">Bác sĩ điều dưỡng</p>	
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End our doctor -->
				<!-- bg-color-primary-->
				<section class="section section-height-3 section-text-light  border-0 m-0 appear-animation  bg-color-primary" data-appear-animation="fadeIn" style="padding-top:20px;padding-bottom:20px;">
					<div class="container">
						<div class="row">

							<div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<div class="owl-carousel owl-theme show-nav-hover" data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': false, 'dots': false, 'autoplay': true, 'autoplayTimeout': 4000}">
									<div class="row">
										<div class="col-10 col-sm-8 col-md-4 order-md-2 my-auto mx-auto">
											<img src="/templates/spa/img/khach-hang.png" class="img-fluid" alt=Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"">
										</div>
										<div class="col-md-7 order-md-1 my-auto mx-auto">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
												<blockquote>
													<p class="text-5 line-height-5 mb-0" style="padding-top:30px;">Các dịch vụ ở Dana Beauty đều chất lượng, họ sử dụng công nghệ hiện đại trong việc làm đẹp, vì thế tôi luôn tin tưởng và sử dụng dịch vụ ở đây.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong class="font-weight-bold text-2 opacity-10">- Chị Hoàng Hoa</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-10 col-sm-8 col-md-4 order-md-2 my-auto mx-auto">
											<img src="/templates/spa/img/tham-my/avatar/khach-hang-3.png" class="img-fluid" alt="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng">
										</div>
										<div class="col-md-7 order-md-1 my-auto mx-auto">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0 align-self-center">
												<blockquote>
													<p class="text-5 line-height-5 mb-0" style="padding-top: 30px;">Ngay từ lần đầu tiên sử dụng dịch vụ, tôi đã cảm thấy được sự chuyên nghiệp của đội ngũ nhân viên Dana Beauty. Cảm ơn Dana Beauty, nhờ sử dụng dịch vụ mà tôi có thể tự tin hơn trong cuộc sống, công việc.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong class="font-weight-bold text-2 opacity-10">- Chị Kim Ánh</strong></p>
												</div>
											</div>
										</div>
									</div>								
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<center><h4>Các hình ảnh của chúng tôi</h4></center>
								<div class="owl-carousel owl-theme show-nav-hover" data-plugin-options="{'items': 4, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'autoplay': true, 'autoplayTimeout': 3000}">
									<div>
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
											<span class="thumb-info-wrapper">
												<img src="/templates/spa/img/tham-my/dich-vu/cham-soc-da-thai-doc-to-1.png" class="img-fluid" alt="Chăm sóc da thải độc tố da">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Chăm sóc da<em>thải độc tố da</em></span>
												</span>
											</span>
										</span>
									</div>
									<div>
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
											<span class="thumb-info-wrapper">
												<img src="/templates/spa/img/tham-my/dich-vu/giam-beo-lipo-1.png" class="img-fluid" alt="Giảm béo lipo tại Dana Beauty">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Chăm sóc cơ thể<em>dịch vụ giảm béo lipo</em></span>
												</span>
											</span>
										</span>
									</div>
									<div>
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
											<span class="thumb-info-wrapper">
												<img src="/templates/spa/img/tham-my/dich-vu/phun-may-tan-bot-2.jpg" class="img-fluid" alt="Phun thiêu thẩm mỹ phun mày tán bột">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Phun thiêu thẩm mỹ<em>phun mày tán bột</em></span>
												</span>
											</span>
										</span>
									</div>
									<div>
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
											<span class="thumb-info-wrapper">
												<img src="/templates/spa/img/tham-my/dich-vu/laser-carbon-1.png" class="img-fluid" alt="Chăm sóc da sử dụng laser carbon">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Chăm sóc da<em>sử dụng laser carbon</em></span>
												</span>
											</span>
										</span>
									</div>
									<div>
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
											<span class="thumb-info-wrapper">
												<img src="/templates/spa/img/tham-my/dich-vu/tam-trang-hoang-gia-1.png" class="img-fluid" alt="Tắm trắng hoàng gia Dana Beauty">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Chăm sóc da<em>sử dụng laser carbon</em></span>
												</span>
											</span>
										</span>
									</div>
									<div>
										<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info">
											<span class="thumb-info-wrapper">
												<img src="/templates/spa/img/tham-my/dich-vu/phun-moi-2.png" class="img-fluid" alt="Phun môi thẩm mỹ tại Dana Beauty">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Thẩm mỹ ngoại khoa<em>phun môi</em></span>
												</span>
											</span>
										</span>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
@stop
@section('meta')
<title>Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng</title>
		<meta name="keywords" content="spa da nang, tham my vien da nang, da nang spa, cham soc da, giam mo bung" />
		<meta name="description" content='Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ' />
		<meta name="news_keywords" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ">

		<meta property="og:title" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta property="og:description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng sử dụng mỹ phẩm cao cấp trên thế giới" />
		<meta property="og:image" content= "/templates/spa/img/logo.png" />
		<meta property="og:url" itemprop="url" content="{{ route('spa.index.index') }}">

		<meta itemprop="name" content="Dana Beauty - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta itemprop="description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài" />
		<meta itemprop="image" content= "/templates/spa/img/logo.png" />
@stop