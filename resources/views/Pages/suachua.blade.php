@extends('Layouts.master')
@section('noidung')
<!-- End .header -->
<main class="main">
   <img src="assets/images/sc.png" alt="salem piano">
   <div class="container">
      <br><br>
      <div class="row">
         <div class="col-lg-8">
            <h3 class="text-center font-weight-bold">SỬA CHỮA ĐÀN PIANO </h3>
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
