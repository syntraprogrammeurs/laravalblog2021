@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Shop Name</h1>
                <hr>
                <h2>Brands</h2>
                <div class="list-group">

                    <a href="{{route('shop')}}" class="list-group-item">ALL</a>
                    @foreach($brands as $brand)
                        <a href="{{route('productsperbrand',$brand->id)}}" class="list-group-item">
                            {{$brand->name}}
                        </a>
                    @endforeach

                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">
                    @if($products)
                        @foreach($products as $key => $product)
                            <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#">
                                    <img class="card-img-top" src="{{$product->photo ? asset('/images/products/') . $product->photo->file : 'http://placehold.it/700x700'}}" alt="{{$product->name}}"></a>
                                <div class="card-body d-flex">
                                    <div class="align-self-end">
                                        <h4 class="card-title">
                                            <a href="#">{{$product->name}}</a>
                                        </h4>
                                        <h5>€{{$product->price}}</h5>
                                        <p class="card-text">{{Str::limit($product->body,5)}}...</p>
                                    </div>

                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <small class="text-muted">★ ★ ★ ★ ☆</small>
                                    <a class="btn btn-success btn-sm" href="{{route('addtocart', $product->id)}}">Buy</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <p>geen producten in stock</p>
                    @endif

                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
@stop
