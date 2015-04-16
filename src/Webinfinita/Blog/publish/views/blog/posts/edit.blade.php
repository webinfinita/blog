@extends('webinfinita/blog::layout')

@section('content')
    <div class="container">
        <div class="row">
            @include('webinfinita/blog::posts.partials.errors')
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h1>Edit {{$post->title}}</h1>
                {!! Form::model($post, ['route' => ['blog.update', $post->slug], 'method' => 'PUT']) !!}
                    @include('posts.partials.form')
                    <div class="row">
                        <div class="form-group col-xs-6">
                            {!! Form::submit('Update Post', ['class' => 'btn btn-default']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
                <div class="form-group col-xs-6">
                    {!! Form::open(['route' => ['blog.destroy', $post->slug], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop