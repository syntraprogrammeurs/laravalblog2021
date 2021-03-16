@extends('layouts.admin')
@section('content')
    <h1>Productcategories</h1>
    <p>Display {{$productcategories->count()}} of {{$productcategories->total()}}</p>
    <div class="row">
        <div class="col-12">
            {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminProductCategory@store',
            'files'=>false]) !!}
            <div class="d-flex">
                <div class="form-group">
                    {!! Form::text('name', null,['class'=>'form-control, mr-1']) !!}
                </div>
                <div class="form-group mr-1">
                    {!! Form::submit('Create productcategory', ['class'=>'btn btn-success']) !!}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="row">Id</th>
                    <th scope="row">Name</th>
                    <th scope="row">Description</th>
                    <th scope="row">Created at</th>
                    <th scope="row">Updated at</th>
                </tr>
                </thead>
                <tbody>
                @if($productcategories)
                    @foreach($productcategories as $key => $productcategory)
                        <tr>
                            <td>{{$productcategory->id}}</td>
                            <td>{{$productcategory->name}}</td>
                            <td>{{$productcategory->description}}</td>
                            <td>{{$productcategory->created_at}}</td>
                            <td>{{$productcategory->updated_at}}</td>
                            <div class="d-flex">
                                <td><a class="btn btn-warning" href="{{route('productcategories.edit', $productcategory->id)}}">Edit</a>
                                </td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE',
                               'action'=>['App\Http\Controllers\AdminProductCategory@destroy',$productcategory->id]]) !!}
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </div>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        {{$productcategories->links()}}
    </div>

@stop
