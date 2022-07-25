@extends('front.layout.index')
@section('meta')
    
<title>Verify License | Verify Driving License KPK </title>
@endsection

@section('content')
<div class="services">
    <div class="container">
        <div class="services-top heading">
            <h1>Verify License</h1>
        </div>
    </div>
</div>
<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
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
<!--start-additional-->
@if($license != null)
<div class="additional">
    <div class="container">
        <div class="additional-top heading">
            <h3>User Information</h3>
            <hr class="space xs" />
        </div>
        <div class="additional-bottom">
            <div class="col-md-4 additional-left">
                <td><img src="{{asset($license->image)}}" width="400" height="400"></td>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="additional-bottom">
            <div class="col-md-4 additional-left">
                <ul>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>Name :</b>   {{$license->name}}</li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>Cnic :</b>   {{$license->cnic}}</li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>Father / Husband Name :</b>   {{$license->father_name}} </li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>City :</b> {{$license->city}}</li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="additional-top heading">
            <h3>License Information</h3>
            <hr class="space xs" />
        </div>
        <div class="additional-bottom">
            <div class="col-md-6 additional-left">
                <ul>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>License Number :</b>   {{$license->license_number}}</li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>Issue Date :</b>   {{$license->issue_date}}</li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>Valid From :</b>   {{$license->valid_from}}</li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>Valid To :</b>   {{$license->valid_to}} </li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>Allowed Vehicle :</b> {{$license->allowed_vehicles}}</li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>Status :</b> {{$license->status}}</li>
                    @if(@$setting->download_button)
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                            <button type="button" id="pin_modals" class="btn btn-info">Download License</button>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        @if($license->international_license_number)
        <div class="additional-top heading">
            <h3>International License Information</h3>
            <hr class="space xs" />
        </div>
        <div class="additional-bottom">
            <div class="col-md-6 additional-left">
                <ul>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>International License Number :</b>   {{$license->international_license_number}}</li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>International Issue Date :</b>   {{$license->international_issue_date}}</li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>International Valid From :</b>   {{$license->international_valid_from}}</li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>International Valid To :</b>   {{$license->international_valid_to}} </li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>International Allowed Vehicle :</b> {{$license->allowed_vehicles}}</li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><b>International Status :</b> {{$license->status}}</li>
                    @if(@$setting->download_button)
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                            <button type="button" id="pin_modals" class="btn btn-info">Download License</button>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        @endif
    </div>
</div>
<!--end-additional-->
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
@endsection