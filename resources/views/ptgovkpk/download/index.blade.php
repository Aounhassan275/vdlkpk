@extends('ptgovkpk.layout.index')
@section('meta')
    
<title>Download | {{App\Models\Setting::siteName()}} </title>
@endsection

@section('content')
<div class="slider-area">
    <div class="single-slider slider-bg4 hero-overly slider-height2 d-flex align-items-end" @if(App\Models\Slider::first())  style="background-image:url({{asset(App\Models\Slider::first()->image)}})!important;" @endif>
        <div class="container">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
    
    <div class="hero-caption hero-caption2">
    <h2 style="font-size:40px;">Download</h2>
     </div>
    </div>
    </div>
    </div>
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <div class="row">
            @foreach (App\Models\Form::download() as $key => $form)
            <div class="col-md-4">
                <div class="advs-box advs-box-top-icon" data-anima="scale-up" data-trigger="hover">
                    <i class="im-cloud-hail icon circle anima"></i>
                    <h3>{{$form->name}}</h3>
                    <a class="btn-text" href="{{url('download_form',$form->id)}}">Download Form</a>
                </div>
            </div>
            @endforeach
        </div>
        <hr class="space" />
    </div>
</div>
@endsection