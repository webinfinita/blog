@extends('webinfinita/blog::layout')

@section('content')
    <div class="container">
        <div class="row">
            @include('posts.partials.errors')
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h1>Create a Post</h1>
                {!! Form::open(['route' => 'blog.store']) !!}
                    @include('posts.partials.form')
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Create Post</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop