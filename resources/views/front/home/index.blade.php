@extends('front.layout.index')
@section('meta')
    
<title>HOME | {{App\Models\Setting::siteName()}} </title>
@endsection

@section('content')
<div class="section-slider row-20"> 
    <div class="flexslider advanced-slider slider white" data-options="animation:fade">
        <ul class="slides">
            @foreach(App\Models\Slider::all() as $slider)
            <li data-slider-anima="fade-left">
                <div class="section-slide">
                    <div class="bg-cover" style="background-image:url({{asset($slider->image)}})">
                    </div>
                    <div class="container">
                        <div class="container-middle">
                            <div class="container-inner text-left text-center-sm">
                                <div class="row vertical-row">
                                    <div class="col-md-12">
                                        <h1 class="text-light text-xl anima text-center">Welcome To {{App\Models\Setting::siteName()}}</h1>
                                        <p class="block-quote quote-2 text-center">
                                            {{$slider->name}}
                                        </p>
                                        <hr class="space xs" />
                                        <hr class="space s" />
                                        <h2 class="text-center"><a href="{{url('verify_license')}}"><button class="btn btn-primary">Verify Now</button> </a></h2>
                                        <hr class="space visible-sm" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection