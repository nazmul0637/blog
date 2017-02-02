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
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Adipisci doloribus et laboriosam maxime, molestiae obcaecati pariatur perferendis repellendus velit veritatis.
                    Assumenda debitis id inventore quasi quibusdam repudiandae sint veniam voluptate?</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Adipisci doloribus et laboriosam maxime, molestiae obcaecati pariatur perferendis repellendus velit veritatis.
                    Assumenda debitis id inventore quasi quibusdam repudiandae sint veniam voluptate?</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Adipisci doloribus et laboriosam maxime, molestiae obcaecati pariatur perferendis repellendus velit veritatis.
                    Assumenda debitis id inventore quasi quibusdam repudiandae sint veniam voluptate?</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Adipisci doloribus et laboriosam maxime, molestiae obcaecati pariatur perferendis repellendus velit veritatis.
                    Assumenda debitis id inventore quasi quibusdam repudiandae sint veniam voluptate?</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection