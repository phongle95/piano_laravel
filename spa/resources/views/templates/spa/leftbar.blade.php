						<div class="col-lg-4">
							<aside class="sidebar sticky-top">
							    <p class="mt-2 mb-2 mx-auto text-6 text-color-primary text-center">Câu chuyện của Dana SPA</p>
        						<p>Đã là phụ nữ thì ai cũng có quyền đẹp và được làm đẹp. Phụ nữ sinh ra vốn đã mang trong mình vẻ đẹp và dấu ấn riêng mà không ai khác có thể có được. Hiểu được ý nghĩa thiêng liêng của việc làm đẹp đối với chị em phụ nữ, Dana mang trong mình sứ mệnh “khơi dậy vẻ đẹp vốn có của người phụ nữ, và biến nó trở nên tỏa sáng hơn bao giờ hết”.</p>
        						<div class="embed-responsive embed-responsive-16by9 shadow rounded"">
        						  	<iframe width="560" height="315" src="https://www.youtube.com/embed/NR1sWCmQMxI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        						</div>
        						<div class="divider divider-small divider-small-center divider-primary">
        							<hr style="width:50%;">
        						</div>
								<div class="tabs tabs-dark mb-4 pb-2 px-2 ">
									<ul class="nav nav-tabs ">
										<li class="nav-item active"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">Dịch vụ khác</a></li>
										<li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-toggle="tab">Ngẫu nhiên</a></li>
									</ul>
									<div class="tab-content ">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
											@foreach($newservices as $newservice)
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="{{ route('spa.service.service', $newservice->slug) }}">
																<img src="/upload/{{ $newservice->img }}" width="50" height="50" alt="{{ $newservice->title }}">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="{{ route('spa.service.service', $newservice->slug) }}">{{ $newservice->title }}</a>
														<div class="post-meta">
															 {{ date_format($newservice->updated_at, 'M d, y') }}
														</div>
													</div>
												</li>
											@endforeach
											</ul>
										</div>
										<div class="tab-pane " id="recentPosts">
											<ul class="simple-post-list">
												@foreach($ranservices as $ranservice)
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="{{ route('spa.service.service', $ranservice->slug) }}">
																<img src="/upload/{{ $ranservice->img }}" width="50" height="50" alt="{{ $ranservice->title }}">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="{{ route('spa.service.service', $ranservice->slug) }}">{{ $ranservice->title }}</a>
														<div class="post-meta">
															 {{ date_format($ranservice->updated_at, 'M d, y') }}
														</div>
													</div>
												</li>
											@endforeach
											</ul>
										</div>
									</div>
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
        						<p>Đã là phụ nữ thì ai cũng có quyền đẹp và được làm đẹp. Phụ nữ sinh ra vốn đã mang trong mình vẻ đẹp và dấu ấn riêng mà không ai khác có thể có được. Hiểu được ý nghĩa thiêng liêng của việc làm đẹp đối với chị em phụ nữ, Dana mang trong mình sứ mệnh “khơi dậy vẻ đẹp vốn có của người phụ nữ, và biến nó trở nên tỏa sáng hơn bao giờ hết”.</p>
                                <div class="divider divider-small divider-small-center divider-primary">
        							<hr style="width:50%;">
        						</div>
								<div class= "shadow p-3 m-2 rounded">
    								<div class="fb-page" data-href="https://www.facebook.com/danabeautyclinicandacademy/" data-tabs="timeline" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/danabeautyclinicandacademy/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/danabeautyclinicandacademy/">DaNa Beauty Clinic &amp; Academy</a></blockquote></div>
								</div>
							</div>