@extends('admin.layout.index')
@section('contents')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3> EDIT SITE SETTING </h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit Site Setting Details</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.setting.update',$setting->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                   <div class="row">
                        <div class="form-group col-12">
                            <label class="form-label">Pin Option :</label>
                            <br>
                            <label><input type="radio" value="1" class="" name="download_button" @if(@$setting->download_button ) checked @endif >
                                On</label>
                            <label>
                                <input type="radio" value="0" class="" name="download_button" @if(@$setting->download_button != 1) checked @endif>
                                Off</label>
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label">Image :</label>
                            <br>
                            <input type="file" class="form-control" name="image" >
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label">Site Name :</label>
                            <br>
                            <input type="text" class="form-control" name="site_name" value="{{@$setting->site_name}}">
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label">About Us :</label>
                            <br>
                            <textarea name="about_us" class="form-control" >{{@$setting->about_us}}</textarea>
                        </div>
                   </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection