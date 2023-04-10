@extends('ptgovkpk.layout.index')
@section('meta')
    
<title>HOME | {{App\Models\Setting::siteName()}} </title>
@endsection

@section('content')

<div class="slider-area">
    <div class="slider-active dot-style">
    @foreach(App\Models\Slider::all() as $slider)
    <div class="single-slider slider-height hero-overly slider-bg1 d-flex align-items-center" style="background-image:url({{asset($slider->image)}})!important;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-7 col-lg-6 col-md-9">
                    <div class="hero-caption">
                        <h1 data-animation="pulse" data-delay=".4s">
                        Verify Your<span>License</span>Now !</h1>
                        <a href="{{url('verify_license')}}" class="hero-btn" data-animation="bounceIn" data-delay=".8s">Verify <i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    
    <div class="slider-footer">
    <div class="footer-wrapper">
    
    <div class="single-caption">
    <div class="caption">
    <span>Our Mission</span>
    <h3>The Foremost & Premier Source For Everything Business.</h3>
    <p>Our mission is to provide quality English language instruction through a variety of courses
    to international and local.</p>
    <a href="#" class="browse-btn browse-btn2">Learn More </a>
    </div>
    </div>
    
    <div class="single-img d-none d-xl-block">
    <img src="{{asset('ptgovkpk/assets/img/hero/hero_footer.html')}}" alt="">
    </div>
    </div>
    </div>
    
    </div>
    </div>
@endsection