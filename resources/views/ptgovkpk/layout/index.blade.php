<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/consultation/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Apr 2023 13:24:25 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
@yield('meta')
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('ptgovkpk/assets/img/icon/favicon.png')}}">

<link rel="stylesheet" href="{{asset('ptgovkpk/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('ptgovkpk/assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('ptgovkpk/assets/css/slicknav.css')}}">
<link rel="stylesheet" href="{{asset('ptgovkpk/assets/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('ptgovkpk/assets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('ptgovkpk/assets/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('ptgovkpk/assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('ptgovkpk/assets/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('ptgovkpk/assets/css/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('ptgovkpk/assets/css/style.css')}}">
<body>
<header>
<div class="header-area header-transparent">
<div class="main-header header-sticky">
<div class="container-fluid">
<div class="menu-wrapper d-flex align-items-center justify-content-between">
<div class="left-content d-flex align-items-center">
<div class="logo">
<a href="{{url('/')}}">
	{{App\Models\Setting::siteName()}}
	{{-- <img src="{{asset('ptgovkpk/assets/img/logo/logo.png')}}" alt=""> --}}
</a>
</div>

<div class="main-menu d-none d-lg-block">
<nav>
<ul id="navigation">
	<li class="{{Request::is('/')?'active':''}}">
		<a  href="{{url('/')}}">Home</a>
	</li>
	<li class="{{Request::is('how_to_apply') || Request::is('verify_license') ?'active':''}}">
		<a href="#" >License Info</a>
		<ul class="submenu">
			{{-- <li><a href="{{url('how_to_apply')}}">How To Apply</a></li> --}}
			<li><a href="{{url('verify_license')}}">Verify License</a></li>
			{{-- <li><a href="blog-classic.html">Track License Delivery</a></li> --}}
		</ul>
	</li>
	<li class="{{Request::is('download')?'active':''}}">
		<a  href="{{url('download')}}">Download</a>
	</li>
	<li class="{{Request::is('contact_us')?'active':''}}">
		<a  href="{{url('contact_us')}}">Contact Us</a>
	</li>
</ul>
</nav>
</div>
</div>

<div class="buttons">
<ul>
{{-- <li class="button-header">
<a href="#" class="browse-btn">Lat's Talk</a>
</li> --}}
</ul>
</div>
</div>

<div class="col-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
</header>
<main>
@yield('content')


</main>
<footer>
<div class="footer-area footer-padding">
<div class="footer-wrapper ">
<div class="container">
<div class="row d-flex justify-content-between">
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="single-footer-caption mb-50">
<div class="single-footer-caption mb-30">

<div class="footer-logo mb-25" style="color:white;">
	{{App\Models\Setting::siteName()}}
{{-- <a href="index-2.html"><img src="{{asset('ptgovkpk/assets/img/logo/logo2_footer.png')}}" alt=""></a> --}}
</div>
 <div class="footer-tittle">
<div class="footer-pera">
<p>                            {!! App\Models\Setting::aboutUs() !!}
</p>
</div>
</div>

</div>
</div>
</div>
<div class="offset-xl-1 col-xl-2 col-lg-2 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Navigation</h4>
<ul>
	<li><a href="{{url('/')}}">Home</a></li>
	<li><a href="{{url('contact_us')}}">Contact Us</a></li>
	<li><a href="{{url('download')}}">Download</a></li>
</ul>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
<div class="single-footer-caption mb-50">
<div class="footer-tittle">
<h4>Services</h4>
<ul>
<li><a href="{{url('how_to_apply')}}">How to Apply</a></li>
<li><a href="{{url('verify_license')}}">Verify License</a></li>
</ul>
</div>
</div>
</div>

</div>
</div>

</div>
</div>
</footer>

<div id="back-top">
<a class="wrapper" title="Go to Top" href="#">
<div class="arrows-container">
<div class="arrow arrow-one">
</div>
<div class="arrow arrow-two">
</div>
</div>
</a>
</div>


<script src="{{asset('ptgovkpk/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/popper.min.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('ptgovkpk/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/slick.min.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/jquery.slicknav.min.js')}}"></script>

<script src="{{asset('ptgovkpk/assets/js/wow.min.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/waypoints.min.js')}}"></script>

<script src="{{asset('ptgovkpk/assets/js/contact.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/mail-script.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('ptgovkpk/assets/js/plugins.js')}}"></script>
<script src="{{asset('ptgovkpk/assets/js/main.js')}}"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996" integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ==" data-cf-beacon='{"rayId":"7b5311f54f813fa7","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>
</html>