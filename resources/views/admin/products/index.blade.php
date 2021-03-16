@extends('layouts.admin')
@section('tab')
    <Products>
@stop
@section('content')
    <h1><span class="badge badge-info display-1 shadow"><i class="fab fa-product-hunt"></i> Products</span></h1>
    <p>
        Displaying {{$products->count()}} of {{ $products->total() }} product(s).
    </p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Tags</th>
            <th scope="col">Body</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @if($products)
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>
                        <img height="62" src="{{$product->photo ? asset('images/products') . $product->photo->file : 'http://placehold.it/62x62'}}" alt="{{$product->name}}">

                    </td>
                    <td>{{$product->name ? $product->name : 'Username unknown'}}</td>
                    <td>
                        @foreach($product->tags as $tag)
                            <span class="badge badge-pill badge-info">{{$tag->name}}</span>
                        @endforeach
                    </td>

                    <td>{{$product->body}}</td>
                    <td>{{$product->created_at->diffForHumans()}}</td>
                    <td>{{$product->updated_at->diffForHumans()}}</td>
{{--                    <td>{{$product->deleted_at}}--}}
{{--                                        <td>--}}
{{--                        <a class="btn btn-info" href="{{route('posts.show', $post->id)}}">Show</a>--}}
{{--                    </td>--}}
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$products->links()}}

@stop

