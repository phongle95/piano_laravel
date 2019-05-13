@extends('Layouts.master')
@section('noidung')
<!-- End .header -->
<main class="main">
   <img src="assets/images/lienhe.jpg" alt="salem piano">
   <nav aria-label="breadcrumb" class="breadcrumb-nav">
      <div class="container">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Liên Hệ Với Chúng Tôi</li>
         </ol>
      </div>
      <!-- End .container -->
   </nav>
   <div class="container">
      <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.327531183115!2d108.23877501536082!3d16.048484644255094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421763016e929b%3A0x9c73b4061889bc88!2zMTcyIENow6J1IFRo4buLIFbEqW5oIFThur8sIELhuq9jIE3hu7kgUGjDuiwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1551933852747"
         width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
      <br><br><br><br>
      <div class="row">
         <div class="col-md-8">
            <h2 class="light-title"> <strong>VIẾT CHO CHÚNG TÔI</strong></h2>
            <form action="#">
               <div class="form-group required-field">
                  <label for="contact-name">Họ Tên</label>
                  <input type="text" class="form-control" id="contact-name" name="contact-name" required>
               </div>
               <!-- End .form-group -->
               <div class="form-group required-field">
                  <label for="contact-email">Địa Chỉ Email</label>
                  <input type="email" class="form-control" id="contact-email" name="contact-email" required>
               </div>
               <!-- End .form-group -->
               <div class="form-group">
                  <label for="contact-phone">Số Điện Thoại</label>
                  <input type="tel" class="form-control" id="contact-phone" name="contact-phone">
               </div>
               <!-- End .form-group -->
               <div class="form-group required-field">
                  <label for="contact-message">Nội Dung Của Bạn</label>
                  <textarea cols="30" rows="1" id="contact-message" class="form-control" name="contact-message"
                     required></textarea>
               </div>
               <!-- End .form-group -->
               <div class="form-footer">
                  <button type="submit" class="btn btn-primary">Gởi Yêu Cầu</button>
               </div>
               <!-- End .form-footer -->
            </form>
         </div>
         <!-- End .col-md-8 -->
         <div class="col-md-4">
            <h2 class="light-title"> <strong>CHI TIẾT LIÊN HỆ</strong></h2>
            <div class="contact-info">
               <div>
                  <i class="icon-phone"></i>
                  <p><a href="tel:">039 469 0908</a></p>
               </div>
               <div>
                  <i class="icon-mobile"></i>
                  <p><a href="tel:">039 469 0908</a></p>
               </div>
               <div>
                  <i class="icon-mail-alt"></i>
                  <p><a href="mailto:#">salempiano@gmail.com</a></p>
               </div>
               <div>
                  <i class="icon-facebook"></i>
                  <p><a href="mailto:#">Salem Piano Technique</a></p>
               </div>
            </div>
            <!-- End .contact-info -->
         </div>
         <!-- End .col-md-4 -->
      </div>
      <!-- End .row -->
   </div>
   <!-- End .container -->
   <div class="mb-8"></div>
   <!-- margin -->
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
<meta property="og:image" content= "assets/images/salem.jpg" />
<!--meta google-->
<meta itemprop="name" content="Music center chuyên dạy học các loại nhạc cụ như piano guitar drum và bán các loại đàn piano nhập khẩu trực tiếp tại nhật bản" />
<meta itemprop="description" content="Salem piano center chuyên cung cấp các loại đàn piano nhập khẩu tại nhật bản và Đào tạo âm nhạc Music center dạy học đàn piano và các loại nhạc cụ" />
<meta itemprop="image" content= "assets/images/GL_20.jpg" />
<meta name="og:url" content="{{ route('Pages.lienhe') }}"/>
@endsection
