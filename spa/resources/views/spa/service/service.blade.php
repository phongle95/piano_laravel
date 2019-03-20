@extends('templates.spa.master')
@section('content')
	<div role="main" class="main" style="background-color: #eee">
	    <!-- Banner Cover -->
	    <img src="/upload/{{ $service->picture }}"
			alt="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng"
			data-bgposition="center center" 
			data-bgfit="cover" 
			data-bgrepeat="no-repeat" 
			class="img-fluid"
			style="width:100%">

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
		<div class="container py-4" style="background-color: #fff; margin-top:40px;">

			<div class="row">
				<div class="col-lg-8">
					<div class="blog-posts single-post">
					
						<article class="post post-large blog-single-post border-0 m-0 p-0">
							<div class="post-date ml-0">
								<span class="day">{{date_format($service->updated_at,'d')}}</span>
								<span class="month">{{date_format($service->updated_at,'M')}}</span>
							</div>
					
							<div class="post-content ml-0">
					
								<h1 class="font-weight-bold text-color-primary" style="text-transform: uppercase;"><a>{{ $service->title }}</a></h1>

								<div class="post-meta">
									<span><i class="far fa-folder"></i> <a href="javascript:void(0)">{{ $service->catpackage->name }}</a> </span>
								</div>

								<p>{!! $service->detail !!}
							</div>
						</article>			
					</div>
				</div>
@include('templates.spa.leftbar')
							</aside>
						</div>
					</div>

				</div>

			</div>
				<!-- End service -->

			</div>
@stop
@section('meta')
<title>{{ $service->title }}</title>
		<meta name="keywords" content="{{$service->keyword}}" />
		<meta name="description" content="{{$service->description}}" />
		<meta name="news_keywords" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ">

		<meta property="og:title" content="{{ $service->title }}" />
		<meta property="og:description" content="{{$service->description}}" />
		<meta property="og:image" content= "/upload/{{ $service->img }}" />
		<meta property="og:url" itemprop="url" content="{{ route('spa.service.service',str_slug($service->title)) }}">
        <meta property="og:site_name" content="https://thammyviendana.com"/>
        
		<meta itemprop="name" content="{{ $service->title }}" />
		<meta itemprop="description" content="{{$service->description}}" />
		<meta itemprop="image" content= "/upload/{{ $service->img }}" />
@stop