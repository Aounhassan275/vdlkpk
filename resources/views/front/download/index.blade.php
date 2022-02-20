@extends('front.layout.index')
@section('meta')
    
<title>Download | Dlims Bhimber Govajk </title>
@endsection

@section('content')
<div class="services">
    <div class="container">
        <div class="services-top heading">
            <h1>DOWNLOAD</h1>
        </div>
        <div class="services-bottom">
            @foreach (App\Models\Form::download() as $key => $form)
            <div class="col-md-4 services-left">
                <h4><span>{{$key+1}}</span><a href="{{url('download_form',$form->id)}}" style="color:#05a6b3;"> {{$form->name}}</a></h4>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection