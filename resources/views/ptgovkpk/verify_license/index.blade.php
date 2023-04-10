@extends('ptgovkpk.layout.index')
@section('meta')
    
<title>Verify License | {{App\Models\Setting::siteName()}} </title>
@endsection

@section('content')

<div class="slider-area">
    <div class="single-slider slider-bg4 hero-overly slider-height2 d-flex align-items-end">
    <div class="container">
    <div class="row">
    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
    
    <div class="hero-caption hero-caption2">
    <h2>Verify Your License</h2>
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
                <form  method="GET">
                    <div class="row">
                        <div class="col-md-8">
                            <input  name="cnic" placeholder="CNIC Number With Hashes" type="text" class="form-control form-value" required>
                            <hr class="space s" />
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit">Verify Now</button>
                            <hr class="space s" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@if($license != null)
<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-12 text-center">
                <img height="200" width="200" src="{{asset($license->image)}}" >
            </div>
        </div>
        <div class="row vertical-row">
            <div class="col-md-6">
                <h4>User Information </h4>
                <hr class="space xs" />
                <ul class="list-texts">
                    <li><b>Name :</b>   {{$license->name}}</li>
                    <li><b>Cnic :</b>   {{$license->cnic}}</li>
                    <li><b>Father / Husband Name :</b>   {{$license->father_name}} </li>
                    <li><b>City :</b> {{$license->city}}</li>
                </ul>
            </div>
        </div>
        <div class="row vertical-row">
            <div class="col-md-6">
                <h4>License Information </h4>
                <hr class="space xs" />
                <ul class="list-texts">
                    <li><b>License Number :</b>   {{$license->license_number}}</li>
                    <li><b>Issue Date :</b>   {{$license->issue_date}}</li>
                    <li><b>Valid From :</b>   {{$license->valid_from}}</li>
                    <li><b>Valid To :</b>   {{$license->valid_to}} </li>
                    <li><b>Allowed Vehicle :</b> {{$license->allowed_vehicles}}</li>
                    <li><b>Status :</b> {{$license->status}}</li>
                    {{-- @if(@$setting->download_button)
                    <li><button type="button"  style="margin-bottom:20px;" class="btn btn-sm" id="pin_modals"> Download License</button></li>
                    @endif --}}
                </ul>
            </div>
        </div>
        @if($license->international_license_number)
        <div class="row vertical-row">
            <div class="col-md-6">
                <h4>International License Information</h4>
                <hr class="space xs" />
                <ul class="list-texts">
                    <li><b>International License Number :</b>   {{$license->international_license_number}}</li>
                    <li><b>International Issue Date :</b>   {{$license->international_issue_date}}</li>
                    <li><b>International Valid From :</b>   {{$license->international_valid_from}}</li>
                    <li><b>International Valid To :</b>   {{$license->international_valid_to}} </li>
                    <li><b>International Allowed Vehicle :</b> {{$license->allowed_vehicles}}</li>
                    <li><b>International Status :</b> {{$license->status}}</li>
                  
                    {{-- @if(@$setting->download_button)
                    <li><button type="button"  style="margin-bottom:20px;" class="btn btn-sm" id="pin_modals"> Download License</button></li>
                    @endif --}}
                </ul>
            </div>
        </div>
        @endif
    </div>
</div>
<div id="pin_modal" class="modal fade">
    <div class="modal-dialog">
        <form method="get">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Enter Pin Code</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> --}}
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Pin</label>
                        <input class="form-control" type="text" name="pin"  required>
                        <input class="form-control" type="hidden" name="license_id"  value="{{@$license->id}}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif

@endsection
@section('scripts')
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('#pin_modals').click(function(event){
            event.preventDefault();
            $("#pin_modal").modal('show');
    });
    });
</script>
 
<script>
        
    $('#cnic').keydown(function(e){
    
      //allow  backspace, tab, ctrl+A, escape, carriage return
      if (event.keyCode == 8 || event.keyCode == 9 
                        || event.keyCode == 27 || event.keyCode == 13 
                        || (event.keyCode == 65 && event.ctrlKey === true) )
                            return;
      if((event.keyCode < 48 || event.keyCode > 57))
       event.preventDefault();
    
      var length = $(this).val().length; 
                  
      if(length == 5 || length == 13)
       $(this).val($(this).val()+'-');
       if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105)) {
        // 0-9 only
        }
     });
    </script>
@endsection