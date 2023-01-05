<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{asset('traning/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('traning/css/style.css')}}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{asset('traning/css/responsive.css')}}">
<!-- Title -->
<title>Edumy - LMS Online Education Course & School HTML Template</title>
<!-- Favicon -->
<link href="{{asset('traning/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{asset('traning/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	@yield('content')

    @include('traning.frontend.layout.footer')

<!-- Wrapper End -->
<script type="text/javascript" src="{{asset('traning/js/jquery-3.3.1.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/jquery.mmenu.all.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/ace-responsive-menu.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/isotop.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/snackbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/simplebar.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/scrollto.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/progressbar.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/timepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('traning/js/isotope.js')}}"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{asset('traning/js/script.js')}}"></script>
</body>
</html>