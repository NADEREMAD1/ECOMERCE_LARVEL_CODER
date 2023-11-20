@extends('layout')
@section('content')
    <div class="">
        <div class="container-fluid mt-5 mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="images p-3">
                                    <div class="text-center p-4"> <img id="main-image"
                                            src="{{ asset('Front/img/baner1 (2).png') }}" width="250" /> </div>
                                    <div class="thumbnail text-center">
                                        <img onclick="change_image(this)" src="{{ asset('Front/img/baner1 (2).png') }}"
                                            width="70">
                                        <img onclick="change_image(this)" src="{{ asset('Front/img/baner1.png') }}"
                                            width="70">
                                        <img onclick="change_image(this)" src="{{ asset('Front/img/baner3.png') }}"
                                            width="70">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i>
                                             <span class="ml-1 ms-2">Back</span>
                                              </div>
                                    </div>
                                    <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                        <h5 class="text-uppercase">Men's slim fit t-shirt</h5>
                                        <div class="price d-flex flex-row align-items-center">
                                            <h4 class="pe-2">
                                                Price
                                            </h4>
                                                <h4 class="act-price">: $20</h4>
                                        </div>
                                    </div>
                                    <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your
                                        everyday use, you could pair it with a stylish pair of jeans or trousers complete
                                        the look.</p>
                                    <div class="sizes mt-5">
                                        <h6 class="text-uppercase">Size</h6>
                                        <label class="radio">
                                            <input type="radio" name="size" value="S" checked> <span>S</span>
                                        </label>
                                        <label class="radio"> <input type="radio" name="size"
                                                value="M"><span>M</span>
                                        </label> <label class="radio"> <input type="radio" name="size" value="L">
                                            <span>L</span></label>
                                        <label class="radio"> <input type="radio" name="size"
                                                value="XL"><span>XL</span></label>
                                        <label class="radio"> <input type="radio"name="size" value="XXL">
                                            <span>XXL</span> </label>
                                    </div>
                                    <div class="cart mt-4 align-items-center"> <button
                                            class="btn btn-primary text-uppercase mr-2 px-4">Add to cart</button> <i
                                            class="fa fa-heart text-muted"></i>
                                        <i class="fa fa-share-alt text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12">
                    <h2>Featured <b>Products</b></h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/baner1 (2).png') }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Apple iPad</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/baner2.png') }}" class="img-fluid"
                                                    alt="Headphone">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Sony Headphone</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/baner3.png') }}" class="img-fluid"
                                                    alt="Macbook">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Macbook Air</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/baner1 (2).png') }}" class="img-fluid"
                                                    alt="Nikon">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Nikon DSLR</h4>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/rate2.png') }}" class="img-fluid"
                                                    alt="Play Station">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Sony Play Station</h4>
                                                <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/rate7.png') }}" class="img-fluid"
                                                    alt="Macbook">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Macbook Pro</h4>
                                                <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/rate6.png') }}" class="img-fluid"
                                                    alt="Speaker">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Bose Speaker</h4>
                                                <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/baner1 (2).png') }}" class="img-fluid"
                                                    alt="Galaxy">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Samsung Galaxy S8</h4>
                                                <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/baner3.png') }}" class="img-fluid"
                                                    alt="iPhone">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Apple iPhone</h4>
                                                <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/baner4.png') }}" class="img-fluid"
                                                    alt="Canon">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Canon DSLR</h4>
                                                <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/rate5.png') }}" class="img-fluid"
                                                    alt="Pixel">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Google Pixel</h4>
                                                <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="{{ asset('Front/img/rate4.png') }}" class="img-fluid"
                                                    alt="Watch">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Apple Watch</h4>
                                                <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
