@extends('layouts.admin')
@section('content')
<h1>Create Post</h1>
<div class="row">
    <div class="col-12">

        @include('includes.form_error')
        {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminPostsController@store',
        'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tag_id', 'Tags:') !!}
            {!! Form::select('tag_id[]',[''=>'Choose tags'] + $tags,null,['class'=>'form-control','multiple']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id',[''=>'Choose categories'] + $categories,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'photo:') !!}
            {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
        </div>
               <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
    </div>

</div>
@stop
