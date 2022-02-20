@extends('front.layout.index')
@section('meta')
    
<title>Contact Us | Dlims Bhimber Govajk </title>
@endsection

@section('content')
<div class="contact">
    <div class="container">
        <div class="contact-top heading">
            <h2>CONTACT FORM</h2>
        </div>
        <div class="contact-bottom"> 
           
                <div class="col-md-6 contact-left"> 
                    <form action="{{url('message_store')}}"  method="post">
                        @csrf
                        <input type="text" name="name"  placeholder="Name" required="">
                        <input type="text"  name="email" placeholder="E-mail" required="">
                        <input type="text"   name="subject" placeholder="Subject" required="">
                </div>
                <div class="col-md-6 contact-left">
                        <textarea name="message" placeholder="Message"></textarea>
                        <input type="submit" value="SEND">
                </div>
            </form>	

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection