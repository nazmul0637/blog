@extends('main')

@section('title' ,'| Homepage')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron">
                <h1>Welcom to My Blog!</h1>
                <p class="lead">Thank you so much for visiting.This is my test website built with Laravel.Please read my popular post!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>
        </div>
    </div> <!-- end of header .row -->
    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="post">
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
                <a href="#" class="btn btn-primary">Read More</a>
                {{--{{route('pages.single',$post->id)}}--}}
            </div>

            <hr>
            @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection