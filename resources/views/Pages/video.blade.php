@extends('Layouts.master')
@section('noidung')
<!-- End .header -->
<main class="main">
   <img src="assets/images/video.jpg" alt="salem piano">
   <div class="container">
      <br><br>
      <div class="row">
         <div class="col-lg-9">
            <h3 class="text-center font-weight-bold">KHO ẢNH CỦA SALEM PIANO</h3>
            <div class='embedsocial-album' data-ref="4c741c44af01313b52a22da0845f05ce77b32e46"></div><script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/embedscript/ei.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialScript"));</script>
         </div>
         <div class="col-lg-3">
             @include('Layouts.facebook')
            {{--  <h2> <span class="badge badge-primary">Fanpage Facebook</span></h2>
            <br>
            <iframe
               src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpianonhapkhaudanang&tabs=timeline&width=340&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
               width="340" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
               allowTransparency="true" allow="encrypted-media"></iframe>  --}}
         </div>
      </div>
      <br><br><br>
   </div>
</main>


<!-- End .main -->
@endsection



@section('meta')
<title>Piano Đà Nẵng</title>
<meta name="keywords" content="salem piano , cửa hàng piano ở đà nẵng , piano đà nẵng , music center ,piano center ,dạy học đàn piano ở đà nẵng , sửa chữa piano tại đà nẵng ,tổ chức sự kiện tại đà nẵng" />
<meta name="description" content='Piano center , Music center Chuyên mua Bán đàn piano được nhập khẩu từ nhật bản và dạy học đàn piano ở đà nẵng và các loại nhạc cụ' />
<!--meta facebook-->
<meta property="og:title" content="salem piano - piano center - music center bán đàn piano ở đà nẵng và dạy học đàn piano tại đà nẵng" />
<meta property="og:description" content="Salem piano là trung tâm âm nhạc tại đà nẵng chuyên bán các loại đàn piano nhập khẩu từ nhật bản và đào tạo âm nhạc dạy học các loại nhạc cụ như đàn piano" />
<meta property="og:image" content= "assets/images/GL_20.jpg" />
<!--meta google-->
<meta itemprop="name" content="Music center chuyên dạy học các loại nhạc cụ như piano guitar drum và bán các loại đàn piano nhập khẩu trực tiếp tại nhật bản" />
<meta itemprop="description" content="Salem piano center chuyên cung cấp các loại đàn piano nhập khẩu tại nhật bản và Đào tạo âm nhạc Music center dạy học đàn piano và các loại nhạc cụ" />
<meta itemprop="image" content= "assets/images/gita.jpg" />
<meta name="og:url" content="{{ route('Pages.video') }}"/>
@endsection
