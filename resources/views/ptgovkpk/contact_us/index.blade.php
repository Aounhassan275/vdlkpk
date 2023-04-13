@extends('ptgovkpk.layout.index')
@section('meta')
    
<title>Contact Us | {{App\Models\Setting::siteName()}} </title>
@endsection

@section('content')

<div class="slider-area">
    <div class="single-slider slider-bg4 hero-overly slider-height2 d-flex align-items-end">
    <div class="container">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
    
    <div class="hero-caption hero-caption2">
    <h2>Contact Us</h2>
     </div>
    </div>
    </div>
    </div>
    </div>
</div>
<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
                <hr class="space s" />
                <form action="{{url('message_store')}}"  method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input id="name" name="name" placeholder="Name" type="text" class="form-control form-value" required>
                    </div>
                    <div class="col-md-6">
                        <input id="email" name="email" placeholder="Email" type="email" class="form-control form-value" required>
                    </div>
                </div>
                <hr class="space xs" />
                    <div class="row">
                    <div class="col-md-12">
                            <input id="subject" name="subject" placeholder="Subject" type="text" class="form-control form-value" required>
                        <hr class="space s" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <textarea id="message" name="message" placeholder="Type here your message" class="form-control form-value" required></textarea>
                        <hr class="space s" />
                        <button class="btn btn-primary" type="submit"><i class="im-mail-send"></i>Send Messages</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection