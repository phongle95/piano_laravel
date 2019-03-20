@extends('templates.spa.master')
@section('content')
<div role="main" class="main">
				<img src="/templates/spa/img/banner-thammun.png"
					alt="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"
					data-bgposition="center center" 
					data-bgfit="cover" 
					data-bgrepeat="no-repeat" 
					class="img-fluid">

				<!-- Intro -->
				<div class="home-intro home-intro-primary" style="margin:0;" id="home-intro">
					<div class="container">
						<div class="row text-center">
							<div class="col">
								<p class="mb-0">
									Các bạn sẽ tìm thấy những dịch vụ spa và thẩm mỹ tốt nhất tại <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-light text-color-light font-weight-semibold text-5">DanaSpa</span>
									<span>Với đội ngũ bác sỹ tư vấn chuyên nghiệp và nhiều kinh nghiệm</span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- End Intro -->

			<div class="container">

				<div class="row mt-5">
					<div class="col-lg-8">
						<h2 class="font-weight-semibold mb-3 text-center text-color-primary">Các khóa học đào tạo nghề chăm sóc da</h2>

						<p class="lead font-weight-normal">Đã là phụ nữ thì ai cũng có quyền đẹp và được làm đẹp. Phụ nữ sinh ra vốn đã mang trong mình vẻ đẹp và dấu ấn riêng mà không ai khác có thể có được. Hiểu được ý nghĩa thiêng liêng của việc làm đẹp đối với chị em phụ nữ, Dana mang trong mình sứ mệnh “khơi dậy vẻ đẹp vốn có của người phụ nữ, và biến nó trở nên tỏa sáng hơn bao giờ hết”.</p>
						<p class="lead font-weight-normal">Tại đây, chúng tôi có nhận tuyển sinh và đạo tạo nghề cho các bạn. Hãy tìm hiểu thêm các khóa đào tạo của chúng tôi</p>
						<div class="row">
							<div class="col-12 col-sm-6 col-lg-6 col-xl-6">
								<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
									<div class="portfolio-item hover-effect-1">
										<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
											<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
												<span class="thumb-info-wrapper">
													<a href="{{ route('spa.service.learnxam') }}"><img src="/templates/spa/img/learn-1.png" class="img-fluid" alt="Đào tạo phun xăm"></a>
													<span class="thumb-info-title">
														<span class="thumb-info-inner">Đào tạo phun săm</span>
														<span class="thumb-info-type" style="background-color: #70f;" >Dạy nghề</span>
													</span>
												</span>
											</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-sm-6 col-lg-6 col-xl-6">
								<div class="appear-animation" data-appear-animation="fadeInUp" data-plugin-options="{'accY': -150}" data-appear-animation-delay="">
									<div class="portfolio-item hover-effect-1">
										<div class="card border-1" style="border-width:10px; border-color:rgba(254,150,0,0.63);" >
											<span class="card-img-top thumb-info thumb-info-hide-wrapper-bg">
												<span class="thumb-info-wrapper">
													<a href="{{ route('spa.service.learnskin') }}"><img src="/templates/spa/img/learn-2.png" class="img-fluid" alt=""></a>
													<span class="thumb-info-title">
														<span class="thumb-info-inner">Đào tạo chăm sóc da</span>
														<span class="thumb-info-type" style="background-color: #70f;" >Dạy nghề</span>
													</span>
												</span>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="divider divider-small divider-small-center divider-primary">
							<hr style="width:50%;">
						</div>
						<iframe src='https://www.sociablekit.com/app/embed/index.php?embed_id=21297' frameborder='0' width='100%' height='700'></iframe>
					</div>

					<div class="col-lg-4">
						 <p class="mt-2 mb-2 mx-auto text-6 text-color-primary text-center">Câu chuyện của Dana SPA</p>
						<p>Đã là phụ nữ thì ai cũng có quyền đẹp và được làm đẹp. Phụ nữ sinh ra vốn đã mang trong mình vẻ đẹp và dấu ấn riêng mà không ai khác có thể có được. Hiểu được ý nghĩa thiêng liêng của việc làm đẹp đối với chị em phụ nữ, Dana mang trong mình sứ mệnh “khơi dậy vẻ đẹp vốn có của người phụ nữ, và biến nó trở nên tỏa sáng hơn bao giờ hết”.</p>
						<div class="embed-responsive embed-responsive-16by9 shadow rounded"">
						  	<iframe width="560" height="315" src="https://www.youtube.com/embed/NR1sWCmQMxI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="divider divider-small divider-small-center divider-primary">
							<hr style="width:50%;">
						</div>					
						<p class="mt-5 mb-2 mx-auto text-6 text-color-primary text-center">Khách hàng tại DanaSpa</p>
						<div class="owl-carousel owl-theme dots-inside mt-2 mb-2" data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 2000}">
							<div>
								<img src="/templates/spa/img/tham-my/khach-hang/tam-trang-hoang-gia-3.png" alt="thẩm mỹ viện dana uy tín tai đà nẵng" style="width:95%;" class="img-fluid shadow p-3 m-2 rounded" /> 
							</div>
							<div>
								<img src="/templates/spa/img/tham-my/khach-hang/tiem-filter-3.png" alt="thẩm mỹ viện dana uy tín tai đà nẵng" style="width:95%;" class="img-fluid shadow p-3 m-2 rounded" /> 
							</div>
							<div>
								<img src="/templates/spa/img/tham-my/khach-hang/cham-soc-da-co-ban-2.png" alt="thẩm mỹ viện dana uy tín tai đà nẵng" style="width:95%;" class="img-fluid shadow p-3 m-2 rounded" /> 
							</div>
							<div>
								<img src="/templates/spa/img/tham-my/khach-hang/giam-beo-lipo-2.png" alt="thẩm mỹ viện dana uy tín tai đà nẵng" style="width:95%;" class="img-fluid shadow p-3 m-2 rounded" /> 
							</div>
							<div>
								<img src="/templates/spa/img/tham-my/khach-hang/nang-mui-2.png" alt="thẩm mỹ viện dana uy tín tai đà nẵng" style="width:95%;" class="img-fluid shadow p-3 m-2 rounded" /> 
							</div>
						</div>
						<ul class="list list-icons list-primary mt-5">
							<li><i class="fas fa-check"></i>Tất cả các dòng Sản phẩm sử dụng tại Dana Beauty đều có thành phần chiết xuất từ thảo dược thiên nhiên, của các hãng Mỹ phẩm lớn như Maystar của Tây Ban Nha, Bạch Linh,…. </li>
							<li><i class="fas fa-check"></i> Dana được chuyển giao các loại máy công nghệ cao, tiên tiến nhất trong lĩnh vực thẩm mỹ của thế giới, được chứng nhận ISO 9000, chứng nhận FDA Hoa Kì, CE chứng nhận đạt tiêu chuẩn Châu Âu.</li>
							<li><i class="fas fa-check"></i> Các thiết bị sử dụng tại Dana luôn là công nghệ hàng đầu Việt Nam và được bảo an toàn sử dụng cũng như đảm vệ sinh an toàn tuyệt đối.</li>
							<li><i class="fas fa-check"></i> Chúng tôi luôn quan niệm con người là tài sản qúy nhất của công ty, cho dù máy móc có hiện đại đến đâu cũng chịu sự điều khiển của con người.</li>
							<li><i class="fas fa-check"></i> Một đội ngũ nhân viên luôn được cập nhật học hỏi những kiến thức mới, những ứng dụng công nghệ tiến tiến của nghành thẩm mỹ thế giới từ các chuyên gia thẩm mỹ trong và ngoài nước</li>
						</ul>
					</div>
				</div>
			</div>

			<section class="call-to-action call-to-action-default call-to-action-big content-align-center mb-0 mt-3">
				<div class="container">
					<div class="row">
						<div class="col-sm-9 col-lg-9">
							<div class="call-to-action-content">
								<h3>"Công nghệ là cách nhanh nhất và tốt nhất để bạn cải thiện kinh doanh!"</h3>
								<p class="mb-0">Liên hệ ngay với chúng tôi để chúng tôi có thể giúp bạn.</p>
							</div>
						</div>
						<div class="col-sm-3 col-lg-3">
							<div class="call-to-action-btn">
								<a href="{{ route('spa.index.contact') }}" target="_blank" class="btn btn-lg btn-primary">Liên hệ</a>
							</div>
						</div>
					</div>
				</div>
			</section>
@stop
@section('meta')
<title>Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng - Dạy nghề</title>
		<meta name="keywords" content="spa da nang, tham my vien da nang, da nang spa, cham soc da, giam mo bung, day nghe spa, day nghe tham my vien" />
		<meta name="description" content='Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ' />
		<meta name="news_keywords" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ">

		<meta property="og:title" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta property="og:description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng sử dụng mỹ phẩm cao cấp trên thế giới" />
		<meta property="og:image" content= "/templates/spa/img/logo.png" />
		<meta property="og:url" itemprop="url" content="{{ route('spa.service.learn') }}">

		<meta itemprop="name" content="Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta itemprop="description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài" />
		<meta itemprop="image" content= "/templates/spa/img/logo.png" />
@stop