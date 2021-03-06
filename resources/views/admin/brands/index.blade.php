@extends('layouts.admin')
@section('content')
    <h1>Categories</h1>
    <p>Display {{$brands->count()}} of {{$brands->total()}}</p>
    <div class="row">
        <div class="col-12">
            {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminBrandsController@store',
            'files'=>false]) !!}
            <div class="d-flex">
                <div class="form-group">
                    {!! Form::text('name', null,['class'=>'form-control, mr-1']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('description', null,['class'=>'form-control, mr-1']) !!}
                </div>
                <div class="form-group mr-1">
                    {!! Form::submit('Create Brand', ['class'=>'btn btn-success']) !!}
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
                @if($brands)
                    @foreach($brands as $key => $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->description}}</td>
                            <td>{{$brand->created_at}}</td>
                            <td>{{$brand->updated_at}}</td>
                            <div class="d-flex">
                                <td><a class="btn btn-warning" href="{{route('brands.edit', $brand->id)}}">Edit</a>
                                </td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE',
                               'action'=>['App\Http\Controllers\AdminBrandsController@destroy',$brand->id]]) !!}
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
        {{$brands->links()}}
    </div>

@stop
