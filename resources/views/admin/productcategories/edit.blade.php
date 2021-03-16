@extends('layouts.admin')
@section('content')
    <h1>Create Productcategory</h1>
    <div class="row">
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::open(['method'=>'PATCH', 'action'=>['App\Http\Controllers\AdminProductCategory@update',
            $productcategory->id],
            'files'=>false]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', $productcategory->name,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::text('description', $productcategory->description,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update ProductCategory', ['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
