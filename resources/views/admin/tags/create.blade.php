@extends('layouts.app')


@section('content')

@include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create new tag
        </div>
        <div class="panel-body">
            <form action="{{ route('tag.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="tag" class="form-control">
                </div>               
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store tag</button>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
    
@endsection