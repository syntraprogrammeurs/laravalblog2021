@extends('layouts.admin')
@section('content')
    <h1>Create Category</h1>
    <div class="row">
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminCategoriesController@store',
            'files'=>false]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Create Category', ['class'=>'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>

    </div>
@stop
