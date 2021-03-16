@extends('layouts.admin')
@section('content')
    <h1>Edit Brand</h1>
    <div class="row">
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminBrandsController@update',
            $brand->id],
            'files'=>false]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', $brand->name,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::text('description', $brand->description,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Brand', ['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
