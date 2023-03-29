<!DOCTYPE html>
<html>
<head>
@yield('meta')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tutoring Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('front/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('front/css/style.css')}}" rel='stylesheet' type='text/css' />
<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.js')}}"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="{{asset('front/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/easing.js')}}"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		    @toastr_css

<!--start-smoth-scrolling-->
</head>
<body>
	<!--start-header-->
	<div class="header" id="home">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('1.jpeg')}}" alt="" /></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="{{Request::is('/')?'active':''}}"><a href="{{url('/')}}" class="hvr-bounce-to-top">Home </a></li>
					<li class="{{Request::is('how_to_apply')?'active':''}}"><a href="{{url('how_to_apply')}}" class="hvr-bounce-to-top">How To Apply</a></li>
					<li class="{{Request::is('verify_license')?'active':''}}"><a href="{{url('verify_license')}}" class="hvr-bounce-to-top">Verify License</a></li>
					<li class="{{Request::is('download')?'active':''}}"><a href="{{url('download')}}" class="hvr-bounce-to-top">Download</a></li>
					<li class="{{Request::is('contact_us')?'active':''}}"><a href="{{url('contact_us')}}" class="hvr-bounce-to-top">Contact Us</a></li>
				</ul>
				<div class="clearfix"></div>
			</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
	<!--end-header-->
	<!--start-banner-->
	@php 
	$setting = App\Models\Setting::find(1);
	@endphp
<div class="banner" style="background-image:url({{asset(@$setting->image)}})">
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="banner-top">
                            <h1>Welcome To Verify Driving License KPK</h1>
                            <h2>Apply Us For Your License
                            </h2>
                            <div class="bnr-btn">
                                <a href="{{url('contact_us')}}" class="hvr-shutter-out-horizontal">Apply Now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-top">
                            <h1>Welcome To Verify Driving License KPK</h1>
                            <h2>Verify Your License
                            </h2>
                            <div class="bnr-btn">
                                <a href="{{url('verify_license')}}" class="hvr-shutter-out-horizontal">Verify Now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
<!--end-banner-->
	<!--FlexSlider-->

	<link rel="stylesheet" href="{{asset('front/css/flexslider.css')}}" type="text/css" media="screen" />
	<script defer src="{{asset('front/js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
	<!--End-slider-script-->
	@yield('content')
	<!--start-footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-main">
				<div class="col-md-6 footer-left">
					<p>Verify Driving License KPK automates the processes for driving license issuance, renewal and upgrades. These activities are carried out throughout the province of KPK</p>
				</div>
				{{-- <div class="col-md-4 footer-left">
					<p>+1 800 603 6035 <span>+1 900 300 1320</span> </p>
				</div> --}}
				<div class="col-md-4 footer-left">
					<p class="footer-class">© 2021 Vdlkpk All Rights Reserved </p>
					<ul>
						<li><a href="#"><span class="fb"></span></a></li>
						<li><a href="#"><span class="twit"></span></a></li>
						<li><a href="#"><span class="rss"></span></a></li>
						<li><a href="#"><span class="ggl"></span></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	@yield('scripts')
	@toastr_js
	@toastr_render
	<!--end-footer-->
</body>
</html>