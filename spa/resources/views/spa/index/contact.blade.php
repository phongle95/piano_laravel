@extends('templates.spa.master')
@section('content')
<div role="main" class="main" style="background-color: #eee">
				<img src="/templates/spa/img/banner-daotao.jpg"
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="img-fluid"
									style="min-height: 110px;">

				<!-- Intro -->
				<div class="home-intro home-intro-quaternary" style="background-color:#333;margin:0;" id="home-intro">
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

				<!-- Start Service -->
				<div class="container container-lg py-5 my-5" id="main">
					<div class="row justify-content-center">
						<div class="col-xl-8 text-center mb-4">
							<h2 class="font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeIn">Hãy để lại thông tin của các bạn</h2>
							<p class="line-height-9 text-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><span class="opacity-7">Các bạn vui lòng để lại thông tin bên dưới, tư vấn viên của chúng tôi sẽ liên hệ với bạn.</span></p>
						</div>
					</div>
					<div class="container">

					<div class="row py-4">
						<div class="col-lg-6">

							<div class="overflow-hidden mb-1">
								<h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">Liên hệ</strong> chúng </h2>
							</div>
							<div class="overflow-hidden mb-4 pb-3">
								<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Feel free to ask for details, don't save any questions!</p>
							</div>

							<form id="contactForm" class="contact-form appear-animation" action="{{ route('spa.index.contact') }}" method="POST" data-appear-animation="fadeIn" data-appear-animation-delay="600">
							{{ csrf_field() }}
@if(Session::has('msg'))
	<div class="contact-form-success alert alert-success mt-4" id="contactSuccess">
		<strong>Success!</strong> {{ Session::get('msg')}}
</div>
@endif

@if ($errors->any())
	<div class="contact-form-error alert alert-danger mt-4" id="contactError">
        @foreach ($errors->all() as $error)
			<strong>Error!</strong> {{ $error }}.
			<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
        @endforeach
    </div>
@endif
								
								<div class="form-row">
								<div class="form-group col-lg-6">
									<label class="required font-weight-bold text-dark">Họ và tên:</label>
									<input type="text" value="{{ old('fullname') }}" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="fullname" id="name">
								</div>
								<div class="form-group col-lg-6">
									<label class="required font-weight-bold text-dark">Địa chỉ email:</label>
									<input type="email" value="{{ old('email') }}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
								</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-dark">Số điện thoại:</label>
										<input type="number" value="{{ old('phone') }}" data-msg-required="Please enter the subject." class="form-control" name="phone" id="subject">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-dark">Tiêu đề:</label>
										<input type="text" value="{{ old('subject') }}" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-dark">Nội dung:</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="description" id="message">{{ old('description') }}</textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Gửi" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-6">

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-1">Văn phòng của<strong> chúng tôi</strong></h4>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Địa chỉ:</strong> 455 Trần Hưng Đạo – TP. Đà Nẵng</li>
									<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Số điện thoại:</strong> 0934 734 555</li>
									<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="danaspa455@gmail.com">danaspa455@gmail.com</a></li>
								</ul>
							</div>

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
								<h4 class="pt-5">Giờ <strong>làm việc</strong></h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> 8:00 đến 20:00 hàng ngày</li>
								</ul>
							</div>

							<h4 class="pt-5">Liên hệ <strong>ngay</strong></h4>
							<p class="lead mb-0 text-4">Đã là phụ nữ thì ai cũng có quyền đẹp và được làm đẹp. Phụ nữ sinh ra vốn đã mang trong mình vẻ đẹp và dấu ấn riêng mà không ai khác có thể có được. Hiểu được ý nghĩa thiêng liêng của việc làm đẹp đối với chị em phụ nữ, Dana mang trong mình sứ mệnh “khơi dậy vẻ đẹp vốn có của người phụ nữ, và biến nó trở nên tỏa sáng hơn bao giờ hết”.</p>

						</div>

					</div>

				</div>

				<!-- End service -->

			</div>
@stop
@section('meta')
<title>Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng</title>
		<meta name="keywords" content="spa da nang, tham my vien da nang, da nang spa, cham soc da, giam mo bung" />
		<meta name="description" content='Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ' />
		<meta name="news_keywords" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ">

		<meta property="og:title" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta property="og:description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng sử dụng mỹ phẩm cao cấp trên thế giới" />
		<meta property="og:image" content= "/templates/spa/img/logo.png" />
		<meta property="og:url" itemprop="url" content="{{ route('spa.index.contact') }}">

		<meta itemprop="name" content="Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
		<meta itemprop="description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài" />
		<meta itemprop="image" content= "/templates/spa/img/logo.png" />
@stop