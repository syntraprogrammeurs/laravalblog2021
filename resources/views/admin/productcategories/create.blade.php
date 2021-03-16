@extends('layouts.admin')
@section('content')
    <h1>Create ProductCategory</h1>
    <div class="row">
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminProductCategory@store',
            'files'=>false]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::text('description', null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Productcategory', ['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>
@stop
