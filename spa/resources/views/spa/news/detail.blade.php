@extends('templates.spa.master')
@section('content')
	<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background-image: linear-gradient(90deg, rgba(2,0,36,0.8) 0%, rgba(67,67,115,0.8) 100%, rgba(0,212,255,0.8) 100%), url(img/bg-1.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-light font-weight-bold text-8">Trang Blog, mẹo vặt về làm đẹp</h1>
								<span class="sub-title text-light">Bổ sung và cập nhật các mẹo làm đẹp tốt nhất cho các chị em!</span>
							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="/">Home</a></li>
									<li><a href="{{ route('spa.news.index') }}">Blog</a></li>
									<li> <a href="{{ route('spa.news.news', $news->cat->name) }}">{{ $news->cat->name }}</a></li>
									<li class="active">{{ $news->title }}</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4" style="background-color: #fff; margin-top:40px;">

					<div class="row">
						@include('templates.spa.blogbar')
						<div class="col-lg-8 order-1">
							<div class="blog-posts single-post">
							
								<article class="post post-large blog-single-post border-0 m-0 p-0">
									<div class="post-image ml-0">
										<a href="">
											<img src="/upload/{{ $news->picture }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $news->title }}" />
										</a>
									</div>
							
									<div class="post-date ml-0">
										<span class="day">{{ date_format($news->updated_at, 'd') }}</span>
										<span class="month">{{ date_format($news->updated_at, 'M') }}</span>
									</div>
							
									<div class="post-content ml-0">
							
										<h2 class="font-weight-bold"><a href="#">{{ $news->title }}</a></h2>
							
										<div class="post-meta">
											<span><i class="far fa-folder"></i> <a href="{{ route('spa.news.news', str_slug($news->cat->name))}}">{{ $news->cat->name }}</a></span>
										</div>
											<span><div class="fb-like" data-href="https://spa.vinasofts.vn" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></span>

										<p>{{ $news->description }}</p>
										<p>{!! $news->detail !!} </p>
																	
									</div>
								</article>
								<div class="fb-comments" data-href="{{ route('spa.news.detail', ['slug' => str_slug($news->title), 'id' => $news->id]) }}" data-numposts="5"></div>
								<div id="fb-root"></div>
								<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1797819373651791&autoLogAppEvents=1"></script>
							</div>
						</div>
					</div>

				</div>

			</div>
@stop
@section('meta')
<title>{{ $news->title }}</title>
<meta name="keywords" content="spa da nang, tham my vien da nang, da nang spa, cham soc da, giam mo bung" />
<meta name="description" content='Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ' />
<meta name="news_keywords" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ">

<meta property="og:title" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
<meta property="og:description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng sử dụng mỹ phẩm cao cấp trên thế giới" />
<meta property="og:image" content= "/upload/{{ $news->img }}" />
<meta property="og:url" itemprop="url" content="{{ route('spa.news.detail',['slug' => str_slug($news->title), 'id' => $news->id]) }}">

<meta itemprop="name" content="Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
<meta itemprop="description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài" />
<meta itemprop="image" content= "/upload/{{ $news->img }}" />
@stop