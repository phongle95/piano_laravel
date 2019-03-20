@extends('Layouts.master')
@section('noidung')
<!-- End .header -->
<main class="main">
   <img src="assets/images/gioithieu.png" alt="salem piano">
   <div class="container">
      <br><br>
      <div class="row">
         <div class="col-lg-8">
            <h3 class="text-center font-weight-bold">GIỚI THIỆU</h3>
            <br>
            {!! $menu->noiDung !!}
         </div>
         <div class="col-lg-4">
            <h2> <span class="badge badge-primary">Fanpage Facebook</span></h2>
            <br>
            <iframe
               src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpianonhapkhaudanang&tabs=timeline&width=340&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
               width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
               allowTransparency="true" allow="encrypted-media"></iframe>
         </div>
      </div>
      <br><br>
   </div>
</main>
<!-- End .main -->
@endsection

@section('meta')
    <title>Salem Piano - Piano Ở Đà Nẵng - Dạy Đàn Piano Tại Đà Nẵng</title>
    <meta name="keywords" content="salem piano , piano đà nẵng , music center ,piano center,dạy học đàn piano ở đà nẵng" />
    <meta name="description" content='Piano center , Music center Chuyên mua Bán đàn piano và dạy học đàn piano ở đà nẵng' />
    <!--meta facebook-->
    <meta property="og:title" content="tên title" />
    <meta property="og:description" content="miêu tả" />
    <meta property="og:image" content= "url hình avatar" />
    <!--meta google-->
    <meta itemprop="name" content="tên title" />
    <meta itemprop="description" content="miêu tả" />
    <meta itemprop="image" content= "url hình avatar" />
    <meta name="og:url" content="http://www.imdb.com/title/tt0117500/"/>
@endsection
