@extends('main')

@section('title', '| Create New Post' )
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Create New Post</h1>
            <hr>

            <form action="/store", method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    {{--{{ Form::label('title','Slug') }}
                    {{Form::text('slug',null,['class'=>'form-controll','required'=>''])}}--}}

                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="form-group">
                    <label for="post">Post Body:</label>
                    <textarea class="form-control" rows="5" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>

            </form>

        </div>
    </div>

@endsection