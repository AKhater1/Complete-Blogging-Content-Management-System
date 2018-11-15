@extends('layouts.app')


@section('content')

@include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Update blog settings
        </div>
        <div class="panel-body">
            <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Site name</label>
                <input type="text" name="site_name" value="{{$settings->site_name}}" class="form-control">
                </div>  

                <div class="form-group">
                    <label for="title">Address</label>
                    <input type="text" name="address" value="{{$settings->address}}" class="form-control">
                </div>      

                <div class="form-group">
                    <label for="title">Contact number</label>
                    <input type="text" name="contact_number" value="{{$settings->contact_number}}" class="form-control">
                </div>      

                <div class="form-group">
                    <label for="title">Contact email</label>
                    <input type="text" name="contact_email" value="{{$settings->contact_email}}" class="form-control">
                </div>           

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update site settings</button>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
    
@endsection