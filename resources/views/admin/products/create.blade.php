@extends('layouts.admin')
@section('content')
    <h1>Create Product</h1>

            @include('includes.form_error')
            {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminProductsController@store',
            'files'=>true]) !!}
            <div class="form-group row">
                <div class="col-lg-3">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                </div>
                <div class="col-lg-3">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::number('price', '0.00',['class'=> 'form-control text-center', 'step'=> 'any']) !!}
                </div>
                <div class="col-lg-3">
                    {!! Form::label('productcategory_id', 'Product category:') !!}
                    {!! Form::select('productcategory_id',[''=>'Choose productcategory'] + $productcategories,null,['class'=>'form-control','multiple']) !!}
                </div>
                <div class="col-lg-3">
                    {!! Form::label('brand_id', 'Brand:') !!}
                    {!! Form::select('brand_id',[''=>'Choose brand'] + $brands,null,['class'=>'form-control','multiple']) !!}
                </div>

            </div>
            <div class="form-group row">
                <div class="col-lg-8">
                    {!! Form::label('body', 'Description:') !!}
                    {!! Form::textarea('body', null,['class'=>'form-control']) !!}
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12">
                            {!! Form::label('tag_id', 'Tags:') !!}
                            {!! Form::select('tag_id[]',[''=>'Choose tags'] + $tags,null,['class'=>'form-control','multiple']) !!}
                        </div>
                        <div class="col-12 mt-2">
                            {!! Form::label('photo_id', 'photo:') !!}
                            {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
                            {!! Form::submit('Create Product', ['class'=>'btn btn-success']) !!}
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}

@stop
