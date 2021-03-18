@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h2>Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">{{Session::get('cart')->totalQuantity}}</span>
                </h4>
                <ul class="list-group mb-3">

                    @foreach($cart as $item)
{{--                    @dd($cart)--}}
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <h6 class="my-0">{{$item['product']->name}}</h6>
                                        <small class="text-muted">{{$item['product_body']}}</small>
                                    </div>
                                    <span class="text-muted">€{{$item['product_price']}}</span>
                                    <small class="text-muted">
                                        Quantity:
                                    </small>
                                    <form method="POST" action="{{action
                                    ('App\Http\Controllers\FrontendController@updateQuantity')
                                    }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <input type="number" name="quantity" class="form-control form-control-sm"
                                               value="{{$item['quantity']}}" min="1" max="100">
                                        <input type="hidden" name="id" value="{{$item['product_id']}}">
                                        <button class="btn btn-info btn-sm mt-2" type="submit"><i
                                                class="fas fa-euro">Update Price</i></button>

                                    </form>
                                    <a class="text-danger" href="{{route('removeItem', $item['product_id'])}}"><i
                                            class="fas
                                    fa-times"></i></a>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex flex-column">
                                        <img class="card-img-top img-thumbnail" src="{{$item['product_image'] ?
                                        asset('/images/products/') . $item['product_image'] : 'GEEN FOTO MOMENTEEL'}}"
                                             alt="">
                                        <small class="text-muted">Item Subtotal:€
                                            {{$item['product_price']*$item['quantity']}}</small>
                                    </div>
                                </div>
                            </div>

                        </li>
                      @endforeach
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
                <form class="card p-2 mt-2 alert alert-success">
                    <p class="text-muted text-center m-0">Total Price:&euro; {{Session::get('cart')->totalPrice}}</p>
                </form>
                <form class="card p-2 mt-2">
                    <div class="input-group d-flex justify-content-between">
                        <a class="btn btn-secondary text-center" href="{{route('shop')}}">Verder winkelen</a>
                        <a class="btn btn-secondary text-center" href="#">Betalen</a>
                    </div>
                </form>
            </div>

        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2018 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    @stop
