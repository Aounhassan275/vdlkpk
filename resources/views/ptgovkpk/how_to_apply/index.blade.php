@extends('ptgovkpk.layout.index')
@section('meta')
    
<title>How To Apply | {{App\Models\Setting::siteName()}} </title>
@endsection

@section('content')
<div class="section-empty">
    <div class="container content">
        <div class="row">
            @foreach (App\Models\Form::apply() as $key => $form)
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