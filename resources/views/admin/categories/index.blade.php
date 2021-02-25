@extends('layouts.admin')
@section('content')
    <h1>Categories</h1>
    <p>Display {{$categories->count()}} of {{$categories->total()}}</p>
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
                            <td><a class="btn btn-warning" href="{{route('categories.edit', $category->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        {{$categories->links()}}
    </div>

    @stop
