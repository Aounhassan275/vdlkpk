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
    @if(App\Models\Slider::count() == 0)
    
    <div class="single-slider slider-height hero-overly slider-bg1 d-flex align-items-center">
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
    
    <div class="single-slider slider-height hero-overly slider-bg2 d-flex align-items-center">
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
    
    <div class="single-slider slider-height hero-overly slider-bg3 d-flex align-items-center">
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
    
    
    @endif
    </div>
    <div class="slider-footer">
    <div class="footer-wrapper">
    
    <div class="single-caption">
    <div class="caption">
    <span>About Us</span>
    <p>{!! App\Models\Setting::aboutUs() !!}</p>
    {{-- <a href="#" class="browse-btn browse-btn2">Learn More </a> --}}
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