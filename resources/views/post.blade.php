@extends('layouts.blog-post')
@section('content')
    <section class="single-post-area">
    <!-- Single Post Title -->
    <div class="single-post-title bg-img background-overlay" style="background-image: url({{asset
    ('images/imagesfront/bg-img/1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="single-post-title-content">
                        <!-- Post Tag -->
                        <div class="gazette-post-tag">
                            <a href="#">{{$post->category->name}}</a>
                        </div>
                        <h2 class="font-pt">{{$post->title}}</h2>
                        <p>{{$post->created_at->diffForHumans()}} by {{$post->user->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-post-contents">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="single-post-text">
                        <p>{{$post->body}}</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@stop
