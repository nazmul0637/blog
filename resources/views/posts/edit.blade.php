@extends('main')

@section('title','|Edit Blog Post')

@section('content')
    <div class="row">
        {!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT']) !!}
        <div class="col-md-8">
            {!! Form::label('title','Title:') !!}
            {{Form::text('title',null, ["class"=>'form-control input-lg'])}}

            {!! Form::label('slug','Slug:') !!}
            {{Form::text('slug',null, ["class"=>'form-control form-spacing-top'])}}

            {!! Form::label('body','Body:') !!}
            {{Form::textarea('body',null,['class'=>'form-control form-spacing-top'])}}
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Create at:</dt>
                    <dd>{{date('M j,Y h:ia',strtotime($post->created_at))}}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{date('M j,Y h:ia',strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-6">

                        {!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}

                        {{--
                                                        <a href="#" class="btn btn-primary btn-block">Edit</a>
                        --}}
                    </div>
                    <div class="col-sm-6">

                        {{Form::submit('Save changes',['class'=>'btn btn-success btn-block'])}}
                        {{--{!! Html::linkRoute('posts.update','Save Changes',array($post->id),array('class'=>'btn btn-success btn-block')) !!}--}}

                        {{--<a href="#" class="btn btn-primary btn-block">Delete</a>--}}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@stop