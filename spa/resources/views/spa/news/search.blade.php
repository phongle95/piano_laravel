@extends('templates.spa.master')
@section('content')
	<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md" style="background-image: linear-gradient(90deg, rgba(2,0,36,0.8) 0%, rgba(67,67,115,0.8) 100%, rgba(0,212,255,0.8) 100%), url(/templates/spa/img/bg-1.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">

							<div class="col-md-12 align-self-center p-static order-2 text-center">

								<h1 class="text-light font-weight-bold text-8">Trang Blog, mẹo vặt về làm đẹp</h1>
								<span class="sub-title text-light">Bổ sung và cập nhật các mẹo làm đẹp tốt nhất cho các chị em!</span>
							</div>

							<div class="col-md-12 align-self-center order-1">

								<ul class="breadcrumb d-block text-center">
									<li><a href="/">Home</a></li>
									<li class="active">Tìm kiếm</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container py-4" style="background-color: #fff; margin-top:40px;">

					<div class="row">
						@include('templates.spa.blogbar')
						<div class="col-lg-8 order-1">
							<div class="blog-posts">
						@foreach($news as $new)
						@php
							$id = $new->id;
							$title = $new->title;
							$description = $new->description;
							$img = $new->img;
							$date = $new->updated_at;
							$cat = $new->cat->name;
							$cat_id = $new->cat->id;

						@endphp
								<article class="post post-medium">
									<div class="row mb-3">
										<div class="col-lg-5">
											<div class="post-image">
												<a href="{{ route('spa.news.detail', ['slug' => str_slug($title), 'id' => $id]) }}">
													<img src="/upload/{{ $img }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $title }}" />
												</a>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="post-content">
												<h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="{{ route('spa.news.detail', ['slug' => str_slug($title), 'id' => $id]) }}">{{ $title }}</a></h2>
												<p class="mb-0">{{ $description }} [...]</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="post-meta">
												<span><i class="far fa-calendar-alt"></i> {{ date_format($date, 'M d, Y') }}</span>
												<span><i class="far fa-folder"></i> <a href="{{ route('spa.news.news', $cat) }}">{{ $cat }}</a>,</span>
												<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="{{ route('spa.news.detail', ['slug' => str_slug($title), 'id' => $id]) }}" class="btn btn-xs btn-light text-1 text-uppercase">Chi tiết</a></span>
											</div>
										</div>
									</div>
								</article>
						@endforeach
								<ul class="pagination float-right">
									{{ $news->links() }}
								</ul>

							</div>
						</div>
					</div>

				</div>
			</div>
@stop
@section('meta')
<title>Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng</title>
<meta name="keywords" content="spa da nang, tham my vien da nang, da nang spa, cham soc da, giam mo bung" />
<meta name="description" content='Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ' />
<meta name="news_keywords" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài ">

<meta property="og:title" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
<meta property="og:description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng sử dụng mỹ phẩm cao cấp trên thế giới" />
<meta property="og:image" content= "/templates/spa/img/bg-2.jpg" />
<meta property="og:url" itemprop="url" content="{{ route('spa.news.search') }}">

<meta itemprop="name" content="Dana Spa - Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng" />
<meta itemprop="description" content="Thẩm mỹ viện, SPA và chăm sóc da Uy tín nhất tại Đà Nẵng, sử dụng công nghệ nước ngoài và được phục vụ bởi các bác sĩ nước ngoài" />
<meta itemprop="image" content= "/templates/spa/img/bg-2.jpg" />
@stop