<h2><span class="badge badge-primary" style="color:#fff;">Tìm Kiếm</span></h2>
<div class="sidebar-wrapper">
    <div class="widget widget-search">
        <form method="GET" role="search" method="get" class="search-form" action="{{ route('Pages.search') }}">
            <input type="search" name="tukhoa" class="form-control" placeholder="Nhập vào để tìm kiếm" name="s" required>
            <button type="submit" class="search-submit" title="Search">
                <i class="icon-search"></i>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>
    <!-- End .widget -->

    <div class="widget">
        <h2><span class="badge badge-primary" style="color:#fff;">Tin Nổi Bật</span></h2>

        <ul class="simple-entry-list">
            @foreach ($sidebar as $item)

            <li>
                <div class="entry-media">
                    <a href="{{ route('Pages.detailnews',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">
                        <img style="height:80px;" src="upload/{{ $item->img }}" alt="hình xông hơi">
                    </a>
                </div>
                <!-- End .entry-media -->
                <div class="entry-info">
                    <a href="{{ route('Pages.detailnews',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}">{{ $item->tieuDe }}</a>
                    <div class="entry-meta">
                        <span><i class="icon-calendar"></i>{{ date("d-m-Y", strtotime($item->date)) }}</span>
                    </div>
                    <!-- End .entry-meta -->
                </div>
                <!-- End .entry-info -->
            </li>
            @endforeach

        </ul>
    </div>

    <div class="widget">

        <div class="widget widget-featured">
            <h2> <span class="badge badge-primary">Top Sản Phẩm Bán Chạy </span></h2>

            <div class="widget-body">
                <div class="owl-carousel widget-featured-products">
                    <div class="featured-col">
                        @foreach ($pianoshare as $item)

                        <div class="product product-sm" style="height:70px">
                            <figure class="product-image-container" style="height:70px">
                                <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="product-image">
                                                    <img src="/upload/{{ $item->img }}" alt="salem piano">
                                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                                    <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}">{{ $item->tenSP }}</a>
                                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span style="color:red" class="product-price">{{number_format($item->gia) }}đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <!-- End .product -->
                        @endforeach

                    </div>
                    <!-- End .featured-col -->

                    <div class="featured-col">
                        @foreach ($guitarshare as $item)

                        <div class="product product-sm" style="height:70px">
                            <figure class="product-image-container" style="height:70px">
                                <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}" class="product-image">
                                                    <img src="/upload/{{ $item->img }}" alt="salem piano">
                                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                                    <a href="{{ route('Pages.chitiet',['slug' => str_slug($item->tenSP),'id'=>$item->id]) }}">{{ $item->tenSP }}</a>
                                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span style="color:red" class="product-price">{{number_format($item->gia) }}đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <!-- End .product -->
                        @endforeach
                    </div>
                    <!-- End .product -->

                </div>
                <!-- End .featured-col -->
            </div>
            <!-- End .widget-featured-slider -->
        </div>
        <!-- End .widget-body -->

    </div>
    <!-- End .widget -->

</div>
<!-- End .sidebar-wrapper -->
