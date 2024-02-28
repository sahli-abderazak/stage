@include('home.navbar')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.codezion.com/themes/html/Rumble/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jan 2024 08:48:32 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="#">
<meta name="description" content="#">

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon.ico">
<link rel="shortcut icon" href="assets/images/favicon.ico">
<!-- Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Fontawesome -->
<link href="assets/css/font-awesome.css" rel="stylesheet">
<!-- Flaticons -->
<link href="assets/css/font/flaticon.css" rel="stylesheet">
<!-- Slick Slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!-- Range Slider -->
<link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet">
<!-- Datepicker -->
<link href="assets/css/datepicker.css" rel="stylesheet">
<!-- magnific popup -->
<link href="assets/css/magnific-popup.css" rel="stylesheet">
<!-- Nice Select -->
<link href="assets/css/nice-select.css" rel="stylesheet">
<!-- Custom Stylesheet -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- Custom Responsive -->
<link href="assets/css/responsive.css" rel="stylesheet">

<!-- CSS for IE -->
<!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
<!-- place -->
</head>
<body>

<div class="section-padding contact-form-map">
  <div class="container">
   
    <div class="row">
      <div class="col-lg-7">
        <div class="section-header style-left">
          <div class="section-heading">
            <h3 class="text-custom-black">Contactez-nous</h3>
            <div class="section-description">
              <p class="text-light-dark">N'hésitez pas à contacter notre service clientèle pour tous renseignements ou pour toutes questions relative à la location automobile. Notre agence de location de voitures, est à votre entière disposition tous les jours de 8h00 à 20h00.</p>
            </div>
          </div>
        </div>
        <form class="mb-md-80" method="post" action="{{ route('contact.send')}}">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="nom" class="form-control form-control-custom" placeholder="Nom et Prenom" required="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="email" class="form-control form-control-custom" placeholder="Votre Email" required="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" name="sujet" class="form-control form-control-custom" placeholder="Sujet" required="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="contenu" rows="5" class="form-control form-control-custom" placeholder="Message" required=""></textarea>
              </div>
              <button type="submit" class="btn-first btn-submit">Envoyer</button>
            </div>
          </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

<!-- Start Contact top -->
<section class="section-padding bg-light-white contact-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="contact-info-box mb-md-40"> <i class="flaticon-placeholder"></i>
          <h6 class="text-theme fw-600">Rue Habib Bourguiba <br>
            Hammamet,Nabeul,Tunisie</h6>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="contact-info-box mb-md-40"> <i class="flaticon-telephone-1"></i>
          <h6 class="text-theme fw-600"><a href="#" class="text-theme">(+216) 24 987 088</a><br>
            Lun-Dim 8:00am-16:00</h6>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="contact-info-box"> <i class="flaticon-envelope"></i>
          <h6 class="text-theme fw-600"><a href="#" class="text-theme">info@domain.com</a><br>
            24/7 online support</h6>
        </div>
      </div>
    </div>
  </div>
</section>

</html>
@include('home.footer')