@extends('layouts.admin')
@section('content')
    <h1>Show Post</h1>
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 25rem;">
                <img class="card-img-top img-fluid" src="{{$post->photo ? asset($post->photo->file) :
                'http://place-hold.it/400x400'}}" alt="{{$post->category->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">Author:{{$post->user->name}}</p>
                    <p class="card-text">Created:{{$post->created_at->diffForHumans()}}</p>
                    <p class="card-text"><i class="fas fa-faq"></i>{{$post->category->name}}</p>
                </div>
            </div>
        </div>
    </div>
@stop
