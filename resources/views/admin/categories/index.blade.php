@extends('layouts.admin')
@section('content')
    <h1>Categories</h1>
    <p>Display {{$categories->count()}} of {{$categories->total()}}</p>
    <div class="row">
        <div class="col-12">
            {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminCategoriesController@store',
            'files'=>false]) !!}
            <div class="d-flex">
                <div class="form-group">
                    {!! Form::text('name', null,['class'=>'form-control, mr-1']) !!}
                </div>
                <div class="form-group mr-1">
                    {!! Form::submit('Create Category', ['class'=>'btn btn-success']) !!}
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
                    <th scope="row">Created at</th>
                    <th scope="row">Updated at</th>
                </tr>
                </thead>
                <tbody>
                @if($categories)
                    @foreach($categories as $key => $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <div class="d-flex">
                                <td><a class="btn btn-warning" href="{{route('categories.edit', $category->id)}}">Edit</a>
                                </td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE',
                               'action'=>['App\Http\Controllers\AdminCategoriesController@destroy',$category->id]]) !!}
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
        {{$categories->links()}}
    </div>

@stop
