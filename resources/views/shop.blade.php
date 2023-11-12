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
                            <input type="text" class="form-control w-100" placeholder="Search For Catogries"
                                aria-label="" aria-describedby="basic-addon1">
                        </form>
                    </div>
                    {{-- start catogries one  --}}
                    <div class="content_categories w-100 ">
                        <div class="catagories_said_bar mb-2 ">
                            <h6 class="ps-1">Phone</h6>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    IPhone 14 Pro Max
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Samsong Glaxy
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">
                                    Relme C17
                                </label>
                            </div>
                        </div>
                        <div class="catagories_said_bar mb-2 ">
                            <h6 class="ps-1">Smart Wache</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                <label class="form-check-label" for="defaultCheck4">
                                    Apple
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                <label class="form-check-label" for="defaultCheck5">
                                    Samssong
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                <label class="form-check-label" for="defaultCheck6">
                                    Hawawy </label>
                            </div>
                        </div>
                        <div class="catagories_said_bar mb-2 ">
                            <h6 class="ps-1">PC</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
                                <label class="form-check-label" for="defaultCheck7">
                                    Lenovo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck8">
                                <label class="form-check-label" for="defaultCheck8">
                                    HP
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck9">
                                <label class="form-check-label" for="defaultCheck9">
                                    Dell </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-md-8">
                    <div class="container w-100 ">
                        <div class="row w-100">
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2" >
                                        <div class="col-12 ">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img p-1">
                                            <div class="d-flex flex-column ">
                                                <a href="{{ route('product_page') }}">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img p-1">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img p-1">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img p-1">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img p-1">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img p-1">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img p-1">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img p-1">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img p-1">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img p-1">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
                                                <button class="btn btn-danger mt-4">
                                                    add To cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-3 mb-2">
                                <div class="p-2">
                                    <div class="row card bg-secondary p-2">
                                        <div class="col-12">
                                            <img src="{{ asset('Front/img/logo.png') }}" alt="s" class="w-100">
                                        </div>
                                        <div class="content_img">
                                            <div class="d-flex flex-column">
                                                <a href="#">
                                                    <h6 class="w-100 pt-2 pb-2 text-white ">Img Shop</h6>
                                                </a>
                                                <span class="pb-2 text-white">Price : 100$</span>
                                                <p class="small_desc text-dark">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Corrupti, perspiciatis.</p>
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
