@include('home.navbar')

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.codezion.com/themes/html/Rumble/cars.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jan 2024 08:48:23 GMT -->
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
<!-- Header -->


<!-- Start Blog -->
<section class="section-padding bg-light-white">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="listing-top-heading mb-xl-20">
          <h6 class="no-margin text-custom-black">Liste de nos Voiture</h6>
        </div>
      </div>
      @foreach($voitures as $voiture)
      <div class=" col-lg-4 col-md-6">
      
        <div class="car-grid mb-xl-30">
          
          <div class="car-grid-wrapper car-grid bx-wrapper">
            <div class="image-sec animate-img"> <a href="#"> <img src="{{asset('storage/'.$voiture->imgV)}}" class="full-width" alt="img"> </a> </div>
            <div class="car-grid-caption padding-20 bg-custom-white p-relative">
              <h4 class="title fs-16"><a href="#" class="text-custom-black">{{$voiture->marque}}<small class="text-light-dark">{{$voiture->modele}}</small></a></h4>
              <span class="price"><small>Prix</small>{{$voiture->tarif}} TND</span>
              <div class="action">  <a class="btn-first btn-submit" href="{{route('reservation',$voiture->id)}}">Book</a> </div>
            </div>
          </div>
        </div>
   
      </div>
      @endforeach
  </div>
</section>
</html>
@include('home.footer')