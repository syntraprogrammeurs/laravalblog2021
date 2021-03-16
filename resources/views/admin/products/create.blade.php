@extends('layouts.admin')
@section('content')
    <h1>Create Product</h1>
    <div class="row">
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminProductsController@store',
            'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tag_id', 'Tags:') !!}
                {!! Form::select('tag_id[]',[''=>'Choose tags'] + $tags,null,['class'=>'form-control','multiple']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Description:') !!}
                {!! Form::text('body', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'photo:') !!}
                {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Product', ['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>
@stop
