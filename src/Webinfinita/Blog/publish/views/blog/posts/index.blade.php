@extends('layout')

@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @if($posts->count())
                    @foreach($posts as $post)
                        <div class="post-preview">
                            <a href="{{url("blog/{$post->slug}")}}">
                                <h2 class="post-title">{{$post->title}}</h2>
                                <h3 class="post-subtitle"> {{$post->subtitle}} </h3>
                            </a>
                            <p class="post-meta">Posted by <a href="#">{{ $post->owner->name }}</a>  {{$post->created_at->diffForHumans()}}</p>
                        </div>
                        <hr/>
                    @endforeach
                <div class="text-center">
                    {!! $posts->render() !!}
                </div>
                    {{--<ul class="pager">--}}
                        {{--<li class="next">--}}
                            {{--<a href="#">Older Posts →</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                @else
                    <div class="alert"> Sorry, there are no posts yet</div>
                @endif
            </div>
        </div>
    </div>
@stop