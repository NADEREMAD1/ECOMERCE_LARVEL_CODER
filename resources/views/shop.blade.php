@extends('layout')
@section('content')
    <div class="container-fluid">
        {{-- Start catogries --}}
        <div class="mt-3 catagories">
            <div class="row w-100  ">
                <div class="col-12 col-lg-2">
                    <a href="#" class="card ">
                        <img src="{{ asset('Front/img/baner3.png') }}" class="img-cat m-auto" width="50%" alt="...">
                        <div class="text-center w-100">
                            <span class="text-center">T Shirt</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-2">
                    <a href="#" class="card ">
                        <img src="{{ asset('Front/img/baner3.png') }}" class="img-cat m-auto" width="50%" alt="...">
                        <div class="text-center w-100">
                            <span class="text-center">Phone</span>
                        </div>
                    </a>

                </div>
                <div class="col-12 col-lg-2">
                    <a href="#" class="card ">
                        <img src="{{ asset('Front/img/baner3.png') }}" class="img-cat m-auto" width="50%" alt="...">
                        <div class="text-center w-100">
                            <span class="text-center">TV</span>
                        </div>

                    </a>
                </div>
                <div class="col-12 col-lg-2">
                    <a href="#" class="card ">
                        <img src="{{ asset('Front/img/baner3.png') }}" class="img-cat m-auto" width="50%" alt="...">
                        <div class="text-center w-100">
                            <span class="text-center">machien</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-2">
                    <a href="#" class="card ">
                        <img src="{{ asset('Front/img/baner3.png') }}" class="img-cat m-auto " width="50%"
                            alt="...">
                        <div class="text-center w-100">
                            <span class="text-center">Drives</span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-2">
                    <a href="#" class="card">
                        <img src="{{ asset('Front/img/baner3.png') }}" class="img-cat align-item-center m-auto"
                            width="50%" alt="...">
                        <div class="text-center w-100">
                            <span class="text-center">Ptinters</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{-- End catogries --}}
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12 col-lg-2 col-md-4 vh-100 border border-2 p-2 sticky-top">
                    <div class="input-group mb-3">
                        <form method="" action="">
                            <input type="text" class="form-control w-100" placeholder="Search For Catogries" aria-label=""
                            aria-describedby="basic-addon1">
                        </form>
                    </div>
                    {{-- start catogries one  --}}
                    <div class="content_categories w-100 ">
                        <div class="catagories_said_bar mb-2 ">
                            <h6 class="ps-1">Phone</h6>
                            <ul class="list-group ">
                                <li class="list-group">
                                    <a href="#" class="ps-2 pt-1">
                                        IPhone 14 Pro Max
                                    </a>
                                </li>
                                <li class="list-group">
                                    <a href="#" class="ps-2 pt-1">
                                        Relme C17
                                    </a>
                                </li>
                                <li class="list-group">
                                    <a href="#" class="ps-2 pt-1">
                                        Samsong Glaxy
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="catagories_said_bar mb-2">
                            <h6 class="ps-1">Smart Wache</h6>
                            <ul class="list-group ">
                                <li class="list-group">
                                    <a href="#" class="ps-2 pt-1">
                                        Apple
                                    </a>
                                </li>
                                <li class="list-group">
                                    <a href="#" class="ps-2 pt-1">
                                    Samssong
                                   </a>
                                </li>
                                <li class="list-group">
                                    <a href="#" class="ps-2 pt-1">
                                        Hawawy
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="catagories_said_bar mb-2">
                            <h6 class="ps-1">PC</h6>
                            <ul class="list-group ">
                                <li class="list-group">
                                    <a href="#" class="ps-2 pt-1">
                                        Dell
                                    </a>
                                </li>
                                <li class="list-group">
                                    <a href="#" class="ps-2 pt-1">
                                    HP
                                   </a>
                                </li>
                                <li class="list-group">
                                    <a href="#" class="ps-2 pt-1">
                                        Lenovo
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-md-8">
                    <div class="container w-100 ">
                        <div class="row w-100">
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="card p-2">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                    </div>
                                    <div class="content_img">
                                        <div class="d-flex flex-column">
                                           <a href="#"> <h6 class="w-100 pt-2 pb-2 ">Img Shop</h6></a>
                                            <span class="pb-2">Price : 100$</span>
                                            <p class="small_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, perspiciatis.</p>
                                            <button class="btn btn-danger mt-4">
                                               add To cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
