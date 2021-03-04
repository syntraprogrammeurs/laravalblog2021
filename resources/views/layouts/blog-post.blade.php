@include('includes.header')

<body>
<!-- Header Area Start -->
<header class="header-area">
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breaking News Area -->
                <div class="col-12 col-md-6">
                    <div class="breaking-news-area">
                        <h5 class="breaking-news-title">Breaking news</h5>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">Brexit breakthrough in Brussels comes after week of drama</a></li>
                                <li><a href="#">Brexit breakthrough in Brussels</a></li>
                                <li><a href="#">Brexit breakthrough in Brussels comes after week of drama</a></li>
                                <li><a href="#">Brex comes after week of drama</a></li>
                                <li><a href="#">Brexit breakthrough in Bweek of drama</a></li>
                                <li><a href="#">Brexit bssels comes after week of drama</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Stock News Area -->
                <div class="col-12 col-md-6">
                    <div class="stock-news-area">
                        <div id="stockNewsTicker" class="ticker">
                            <ul>
                                <li>
                                    <div class="single-stock-report">
                                        <div class="stock-values">
                                            <span>eur/usd</span>
                                            <span>1.1862</span>
                                        </div>
                                        <div class="stock-index minus-index">
                                            <h4>0.18</h4>
                                        </div>
                                    </div>
                                    <div class="single-stock-report">
                                        <div class="stock-values">
                                            <span>BTC/usd</span>
                                            <span>15.674.99</span>
                                        </div>
                                        <div class="stock-index plus-index">
                                            <h4>8.60</h4>
                                        </div>
                                    </div>
                                    <div class="single-stock-report">
                                        <div class="stock-values">
                                            <span>ETH/usd</span>
                                            <span>674.99</span>
                                        </div>
                                        <div class="stock-index minus-index">
                                            <h4>13.60</h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-stock-report">
                                        <div class="stock-values">
                                            <span>eur/usd</span>
                                            <span>1.1862</span>
                                        </div>
                                        <div class="stock-index minus-index">
                                            <h4>0.18</h4>
                                        </div>
                                    </div>
                                    <div class="single-stock-report">
                                        <div class="stock-values">
                                            <span>BTC/usd</span>
                                            <span>15.674.99</span>
                                        </div>
                                        <div class="stock-index plus-index">
                                            <h4>8.60</h4>
                                        </div>
                                    </div>
                                    <div class="single-stock-report">
                                        <div class="stock-values">
                                            <span>ETH/usd</span>
                                            <span>674.99</span>
                                        </div>
                                        <div class="stock-index minus-index">
                                            <h4>13.60</h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-stock-report">
                                        <div class="stock-values">
                                            <span>eur/usd</span>
                                            <span>1.1862</span>
                                        </div>
                                        <div class="stock-index minus-index">
                                            <h4>3.95</h4>
                                        </div>
                                    </div>
                                    <div class="single-stock-report">
                                        <div class="stock-values">
                                            <span>BTC/usd</span>
                                            <span>15.674.99</span>
                                        </div>
                                        <div class="stock-index plus-index">
                                            <h4>4.78</h4>
                                        </div>
                                    </div>
                                    <div class="single-stock-report">
                                        <div class="stock-values">
                                            <span>ETH/usd</span>
                                            <span>674.99</span>
                                        </div>
                                        <div class="stock-index minus-index">
                                            <h4>11.37</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Middle Header Area -->
    <div class="middle-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Logo Area -->
                <div class="col-12 col-md-4">
                    <div class="logo-area">
                        <a href="index.html"><img src="{{asset('images/imagesfront/core-img/logo.png')}}"
                                                  alt="logo"></a>
                    </div>
                </div>
                <!-- Header Advert Area -->
                <div class="col-12 col-md-8">
                    <div class="header-advert-area">
                        <a href="#"><img src="{{asset('images/imagesfront/bg-img/top-advert.png')}}"
                                         alt="header-add"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Header Area -->
    <div class="bottom-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="main-menu">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#gazetteMenu" aria-controls="gazetteMenu" aria-expanded="false"
                                    aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu
                            </button>
                            <div class="collapse navbar-collapse" id="gazetteMenu">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Today <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="index.html">Home</a>
                                            <a class="dropdown-item" href="catagory.html">Catagory</a>
                                            <a class="dropdown-item" href="single-post.html">Single Post</a>
                                            <a class="dropdown-item" href="about-us.html">About Us</a>
                                            <a class="dropdown-item" href="contact.html">Contact</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Politics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Lifestyle</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Travel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Health</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Entertainment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">sport</a>
                                    </li>
                                </ul>
                                <!-- Search Form -->
                                <div class="header-search-form mr-auto">
                                    <form action="#">
                                        <input type="search" placeholder="Input your keyword then press enter..."
                                               id="search" name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div id="searchbtn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->

@yield('content')

<section class="gazette-post-discussion-area section_padding_100 bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <!-- Comment Area Start -->
                <div class="comment_area section_padding_50 clearfix">
                    <div class="gazette-heading">
                        <h4 class="font-bold">Discussion</h4>
                    </div>
                    @if(Session::has('postcomment_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p class="alert-success">Thanks for your contribution to this post!</p>
                            <hr>
                            <p class="mb-0 alert-success">{{session('postcomment_message')}}</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidde="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <ol>
                        <!-- Single Comment Area -->

                        @foreach($postcomments as $postcomment)
                            <li class="single_comment_area">
                                <div class="comment-wrapper d-md-flex align-items-start">
                                    <!-- Comment Meta -->
                                    <div class="comment-author">
                                        <img src="{{$postcomment->user->photo ? $postcomment->user->photo->file :
                                        'http://placehold.it/70x70' }}"
                                             alt="">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <h5>{{$postcomment->user->name}}</h5>
                                        <span class="comment-date
                                        font-pt">{{$postcomment->created_at->diffForhumans()}}</span>
                                        <p>{{$postcomment->body}}</p>
                                        <div id="accordion">

                                            <a class="reply-btn" href="#"  aria-expanded="false"
                                               data-toggle="collapse"
                                               data-target="#collapse{{$postcomment->id}}"
                                               aria-controls="collapse{{$postcomment->id}}">Reply <i class="fa fa-reply"
                                                                                  ></i></a>


                                            <div id="collapse{{$postcomment->id}}" class="pr-3 pt-3 collapse">
                                                @auth
                                                    <form  action="{{action
                                                    ('App\Http\Controllers\AdminPostCommentReplies@store')}}"
                                                          method="post">
                                                        @csrf
                                                        <input type="hidden" name="postcomment_id"
                                                               value="{{$postcomment->id}}">
                                                        <div class="form-group">
                                    <textarea class="form-control  bg-dark" name="body" id="message" cols="30" rows="10"
                                              placeholder="Message"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn leave-comment-btn">SUBMIT <i
                                                                class="fa fa-angle-right ml-2"></i></button>
                                                    </form>
                                                @endauth
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <ol class="children">
{{--                                    @if(count($postcomment->postcommentreplies) > 0)--}}

                                        @foreach($postcomment->postcommentreplies as $postcommentreply)

                                            <li class="single_comment_area">
                                                <div class="comment-wrapper d-md-flex align-items-start">
                                                    <!-- Comment Meta -->
                                                    <div class="comment-author">
                                                        <img src="{{asset('images/imagesfront/blog-img/25.jpg')}}" alt="">
                                                    </div>
                                                    <!-- Comment Content -->
                                                    <div class="comment-content">
                                                        <h5>{{$postcommentreply->user}}</h5>
                                                        <span class="comment-date
                                                        text-muted">{{$postcommentreply->created_at->diffForHumans()}}</span>
                                                        <p>{{$postcommentreply->body}}</p>
                                                        <a class="reply-btn" href="#">Reply <i class="fa fa-reply"
                                                                                               aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
{{--                                    @endif--}}
                                </ol>
                            </li>

                        @endforeach
                    </ol>
                </div>
                <!-- Leave A Comment -->
                <div class="leave-comment-area clearfix">
                    <div class="comment-form">
                        <div class="gazette-heading">
                            <h4 class="font-bold">leave a comment</h4>
                        </div>
                        <!-- Comment Form -->
                        @auth
                            <form action="{{action('App\Http\Controllers\PostComments@store')}}" method="post">
                                @csrf
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <div class="form-group">
                                    <textarea class="form-control" name="body" id="message" cols="30" rows="10"
                                              placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn leave-comment-btn">SUBMIT <i
                                        class="fa fa-angle-right ml-2"></i></button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Area Start -->
<footer class="footer-area bg-img background-overlay" style="background-image: url(img/bg-img/4.jpg);">
    <!-- Top Footer Area -->
    <div class="top-footer-area section_padding_100_70">
        <div class="container">
            <div class="row">
                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-footer-widget">
                        <div class="footer-widget-title">
                            <h4 class="font-pt">Regions</h4>
                        </div>
                        <ul class="footer-widget-menu">
                            <li><a href="#">U.S.</a></li>
                            <li><a href="#">Africa</a></li>
                            <li><a href="#">Americas</a></li>
                            <li><a href="#">Asia</a></li>
                            <li><a href="#">China</a></li>
                            <li><a href="#">Europe</a></li>
                            <li><a href="#">Middle</a></li>
                            <li><a href="#">East</a></li>
                            <li><a href="#">Opinion</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-footer-widget">
                        <div class="footer-widget-title">
                            <h4 class="font-pt">Fashion</h4>
                        </div>
                        <ul class="footer-widget-menu">
                            <li><a href="#">Election 2016</a></li>
                            <li><a href="#">Nation</a></li>
                            <li><a href="#">World</a></li>
                            <li><a href="#">Our Team</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-footer-widget">
                        <div class="footer-widget-title">
                            <h4 class="font-pt">Politics</h4>
                        </div>
                        <ul class="footer-widget-menu">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Markets</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-footer-widget">
                        <div class="footer-widget-title">
                            <h4 class="font-pt">Featured</h4>
                        </div>
                        <ul class="footer-widget-menu">
                            <li><a href="#">Football</a></li>
                            <li><a href="#">Golf</a></li>
                            <li><a href="#">Tennis</a></li>
                            <li><a href="#">Motorsport</a></li>
                            <li><a href="#">Horseracing</a></li>
                            <li><a href="#">Equestrian</a></li>
                            <li><a href="#">Sailing</a></li>
                            <li><a href="#">Skiing</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-footer-widget">
                        <div class="footer-widget-title">
                            <h4 class="font-pt">FAQ</h4>
                        </div>
                        <ul class="footer-widget-menu">
                            <li><a href="#">Aviation</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Traveller</a></li>
                            <li><a href="#">Destinations</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Food/Drink</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Partner Hotels</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="single-footer-widget">
                        <div class="footer-widget-title">
                            <h4 class="font-pt">+More</h4>
                        </div>
                        <ul class="footer-widget-menu">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Arts</a></li>
                            <li><a href="#">Autos</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12">
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                                aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="{{asset('js/jsfront/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
{{--<script src="{{asset('js/jsfront/popper.min.js')}}"></script>--}}
<!-- Bootstrap js -->
<script src="{{asset('js/jsfront/bootstrap.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('js/jsfront/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/jsfront/active.js')}}"></script>

</body>

</html>
