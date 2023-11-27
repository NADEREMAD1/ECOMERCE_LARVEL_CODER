@extends('User.layout')
@section('content')
    {{-- Start Slider one  --}}
    <div class="container mt-1 w-100 bg-dark pb-5">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="container  m-5 p-5">
                                <div class="tex-white p-5">
                                    <h4 class="text-white text-uppercase">PlayStation 5 Console</h4>
                                    <button class="btn btn-warning"> SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 ">
                            <img src="{{ asset('Front/img/baner4.png') }}" class="d-block  w-75 m-auto" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="container  m-5 p-5">
                                <div class="tex-white p-5">
                                    <h4 class="text-white text-uppercase">Smartwatch Fitness for iOS</h4>
                                    <button class="btn btn-warning"> SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 ">
                            <img src="{{ asset('Front/img/baner2.png') }}" class="d-block w-100 " alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="container  m-5 p-5">
                                <div class="tex-white p-5">
                                    <h4 class="text-white text-uppercase">Headphones ANC Stereo Headset</h4>
                                    <button class="btn btn-warning"> SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 ">
                            <img src="{{ asset('Front/img/baner3.png') }}" class="d-block w-75 m-auto" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- Start Slider one  --}}

    {{-- start info  --}}
    <div class="container-fluid mt-5 mb-3 bg-white p-3">
        <div class="row m-auto ">
            <div class="col-12 col-lg-3 col-md-6 p-3">
                <div class="w-25 m-auto mb-2">
                    <img src="{{ asset('Front/img/info1.png') }}" class="w-50 m-auto"alt="">
                </div>
                <h6 class="text-center ">
                    Worldwide Shipping
                </h6>
                <p class="text-center ">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolore distinctio provident nisi nulla
                    maxime natus ab?
                </p>
            </div>
            <div class="col-12 col-lg-3 col-md-6 p-3">
                <div class="w-25 m-auto mb-2">
                    <img src="{{ asset('Front/img/info2.png') }}" class="w-50 m-auto"alt="">
                </div>
                <h6 class="text-center ">
                    Worldwide Shipping
                </h6>
                <p class="text-center ">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolore distinctio provident nisi nulla
                    maxime natus ab?
                </p>
            </div>
            <div class="col-12 col-lg-3 col-md-6 p-3">
                <div class="w-25 m-auto mb-2">
                    <img src="{{ asset('Front/img/info3.png') }}" class="w-50 m-auto"alt="">
                </div>
                <h6 class="text-center ">
                    Worldwide Shipping
                </h6>
                <p class="text-center ">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolore distinctio provident nisi nulla
                    maxime natus ab?
                </p>
            </div>
            <div class="col-12 col-lg-3 col-md-6 p-3">
                <div class="w-25 m-auto mb-2">
                    <img src="{{ asset('Front/img/info4.png') }}" class="w-50 m-auto"alt="">
                </div>
                <h6 class="text-center ">
                    Worldwide Shipping
                </h6>
                <p class="text-center ">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolore distinctio provident nisi nulla
                    maxime natus ab?
                </p>
            </div>
        </div>
    </div>
    {{-- start info  --}}

    {{-- Start Top Rate --}}
    <div class="container-fluid w-100">
        <h2 class="text-center"> TOP RATE </h2>
        <div class="row pt-5">
            <div class=" col-12 col-lg-3 col-md-4 mb-3">
                <div class="card p-3 mb-1">
                    <p class="text-center">
                        Turtle Beach Amplified Gaming Headset
                    </p>
                    <div class="container w-50 m-auto">
                        <img src="{{ asset('Front/img/rate7.png') }}" class="w-100 img-fluid" alt="">
                    </div>

                    <div class="container d-flex mt-3">
                        <div class="w-75">
                            <ul class="list-group ">
                                <li class="list-group"><span class="text-danger">PRICE : 123$</span></li>
                            </ul>
                        </div>
                        <div class="w-25 d-flex">
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <button class="btn btn-danger w-100 mt-3 m-auto">Sell Now</button>
                </div>
            </div>
            <div class=" col-12 col-lg-3 col-md-4 mb-3">
                <div class="card p-3 mb-1">
                    <p class="text-center">
                        Turtle Beach Amplified Gaming Headset
                    </p>
                    <div class="container w-50 m-auto">
                        <img src="{{ asset('Front/img/rate7.png') }}" class="w-100 img-fluid" alt="">
                    </div>

                    <div class="container d-flex mt-3">
                        <div class="w-75">
                            <ul class="list-group ">
                                <li class="list-group"><span class="text-danger">PRICE : 123$</span></li>
                            </ul>
                        </div>
                        <div class="w-25 d-flex">
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <button class="btn btn-danger w-100 mt-3 m-auto">Sell Now</button>
                </div>
            </div>
            <div class=" col-12 col-lg-3 col-md-4 mb-3">
                <div class="card p-3 mb-1">
                    <p class="text-center">
                        Turtle Beach Amplified Gaming Headset
                    </p>
                    <div class="container w-50 m-auto">
                        <img src="{{ asset('Front/img/rate7.png') }}" class="w-100 img-fluid" alt="">
                    </div>

                    <div class="container d-flex mt-3">
                        <div class="w-75">
                            <ul class="list-group ">
                                <li class="list-group"><span class="text-danger">PRICE : 123$</span></li>
                            </ul>
                        </div>
                        <div class="w-25 d-flex">
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <button class="btn btn-danger w-100 mt-3 m-auto">Sell Now</button>
                </div>
            </div>
            <div class=" col-12 col-lg-3 col-md-4 mb-3">
                <div class="card p-3 mb-1">
                    <p class="text-center">
                        Turtle Beach Amplified Gaming Headset
                    </p>
                    <div class="container w-50 m-auto">
                        <img src="{{ asset('Front/img/rate7.png') }}" class="w-100 img-fluid" alt="">
                    </div>

                    <div class="container d-flex mt-3">
                        <div class="w-75">
                            <ul class="list-group ">
                                <li class="list-group"><span class="text-danger">PRICE : 123$</span></li>
                            </ul>
                        </div>
                        <div class="w-25 d-flex">
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <button class="btn btn-danger w-100 mt-3 m-auto">Sell Now</button>
                </div>
            </div>
            <div class=" col-12 col-lg-3 col-md-4 mb-3">
                <div class="card p-3 mb-1">
                    <p class="text-center">
                        Turtle Beach Amplified Gaming Headset
                    </p>
                    <div class="container w-50 m-auto">
                        <img src="{{ asset('Front/img/rate7.png') }}" class="w-100 img-fluid" alt="">
                    </div>

                    <div class="container d-flex mt-3">
                        <div class="w-75">
                            <ul class="list-group ">
                                <li class="list-group"><span class="text-danger">PRICE : 123$</span></li>
                            </ul>
                        </div>
                        <div class="w-25 d-flex">
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <button class="btn btn-danger w-100 mt-3 m-auto">Sell Now</button>
                </div>
            </div>
            <div class=" col-12 col-lg-3 col-md-4 mb-3">
                <div class="card p-3 mb-1">
                    <p class="text-center">
                        Turtle Beach Amplified Gaming Headset
                    </p>
                    <div class="container w-50 m-auto">
                        <img src="{{ asset('Front/img/rate7.png') }}" class="w-100 img-fluid" alt="">
                    </div>

                    <div class="container d-flex mt-3">
                        <div class="w-75">
                            <ul class="list-group ">
                                <li class="list-group"><span class="text-danger">PRICE : 123$</span></li>
                            </ul>
                        </div>
                        <div class="w-25 d-flex">
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <button class="btn btn-danger w-100 mt-3 m-auto">Sell Now</button>
                </div>
            </div>
            <div class=" col-12 col-lg-3 col-md-4 mb-3">
                <div class="card p-3 mb-1">
                    <p class="text-center">
                        Turtle Beach Amplified Gaming Headset
                    </p>
                    <div class="container w-50 m-auto">
                        <img src="{{ asset('Front/img/rate7.png') }}" class="w-100 img-fluid" alt="">
                    </div>

                    <div class="container d-flex mt-3">
                        <div class="w-75">
                            <ul class="list-group ">
                                <li class="list-group"><span class="text-danger">PRICE : 123$</span></li>
                            </ul>
                        </div>
                        <div class="w-25 d-flex">
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <button class="btn btn-danger w-100 mt-3 m-auto">Sell Now</button>
                </div>
            </div>
            <div class=" col-12 col-lg-3 col-md-4 mb-3">
                <div class="card p-3 mb-1">
                    <p class="text-center">
                        Turtle Beach Amplified Gaming Headset
                    </p>
                    <div class="container w-50 m-auto">
                        <img src="{{ asset('Front/img/rate7.png') }}" class="w-100 img-fluid" alt="">
                    </div>

                    <div class="container d-flex mt-3">
                        <div class="w-75">
                            <ul class="list-group ">
                                <li class="list-group"><span class="text-danger">PRICE : 123$</span></li>
                            </ul>
                        </div>
                        <div class="w-25 d-flex">
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <button class="btn btn-danger w-100 mt-3 m-auto">Sell Now</button>
                </div>
            </div>

        </div>
    </div>
    {{-- End Top Rate --}}

    {{-- Start Slider Tow  --}}
    <div class="container-fluid mt-1 w-100 bg-dark pb-3 mb-3">
        <div id="carouselExampleInterval2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6 ">
                            <img src="{{ asset('Front/img/offer_banner.png') }}" class="d-block w-25 pt-5 m-auto"
                                alt="...">
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="container  m-5 p-5">
                                <div class="tex-white p-5">
                                    <h4 class="text-white text-uppercase">PlayStation 5 Console</h4>
                                    <button class="btn btn-warning"> SHOP NOW</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6 ">
                            <img src="{{ asset('Front/img/rate3.png') }}" class="d-block pt-5 w-75 " alt="...">
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="container  m-5 p-5">
                                <div class="tex-white p-5">
                                    <h4 class="text-white text-uppercase">Smartwatch Fitness for iOS</h4>
                                    <button class="btn btn-warning"> SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6 ">
                            <img src="{{ asset('Front/img/iphone_14.png') }}" class="d-block w-75 m-auto"
                                alt="...">
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="container  m-5 p-5">
                                <div class="tex-white p-5">
                                    <h4 class="text-white text-uppercase">Headphones ANC Stereo Headset</h4>
                                    <button class="btn btn-warning"> SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval2"
                data-bs-slide="prev">
                {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval2"
                data-bs-slide="next">
                {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- End Slider Tow  --}}

    {{-- start Top Categories 1 --}}
    <div class="container-fliud p-5">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-8 m-auto mb-5">
                <div class="card vh-100">
                    <h3 class="text-center p-4">Adorkable White Text Typography Hoodie</h3>
                    <div class="img m-auto">
                        <img src="{{ asset('Front/img/shirt.webp') }}" width="100%" height="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="row">
                                <div class="img">
                                    <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="100%"
                                    height="100%" alt="">
                                </div>
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Top Categories 1 --}}

    {{-- Start Slider Tow  --}}
    <div class="container-fluid mt-1 w-100 bg-dark pb-3 mb-3">
        <div id="carouselExampleInterval2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6 ">
                            <img src="{{ asset('Front/img/offer_banner.png') }}" class="d-block w-25 pt-5 m-auto"
                                alt="...">
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="container  m-5 p-5">
                                <div class="tex-white p-5">
                                    <h4 class="text-white text-uppercase">PlayStation 5 Console</h4>
                                    <button class="btn btn-warning"> SHOP NOW</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6 ">
                            <img src="{{ asset('Front/img/rate3.png') }}" class="d-block pt-5 w-75 " alt="...">
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="container  m-5 p-5">
                                <div class="tex-white p-5">
                                    <h4 class="text-white text-uppercase">Smartwatch Fitness for iOS</h4>
                                    <button class="btn btn-warning"> SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6 ">
                            <img src="{{ asset('Front/img/iphone_14.png') }}" class="d-block w-75 m-auto"
                                alt="...">
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="container  m-5 p-5">
                                <div class="tex-white p-5">
                                    <h4 class="text-white text-uppercase">Headphones ANC Stereo Headset</h4>
                                    <button class="btn btn-warning"> SHOP NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval2"
                data-bs-slide="prev">
                {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval2"
                data-bs-slide="next">
                {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- End Slider Tow  --}}

    {{-- start Top Categories 2 --}}
    <div class="container-fliud p-5">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-4 mb-1">
                        <div class="card">
                            <p class="text-center">Shite Barca
                            </p>
                            <div class="img">
                                <img src="{{ asset('Front/img/FCB.png') }}" class="m-auto w-75 ms-2" width="60%"
                                    height="60%" alt="">
                            </div>
                            <div class="w-75 m-auto mt-3 p-2">
                                <button class="btn btn-danger">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12 ">
                <div class="card vh-100">
                    <h3 class="text-center p-4">Adorkable White Text Typography Hoodie</h3>
                    <div class="img m-auto">
                        <img src="{{ asset('Front/img/shirt.webp') }}" width="100%" height="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Top Categories 2 --}}


    {{-- End content index Page --}}
@endsection()
