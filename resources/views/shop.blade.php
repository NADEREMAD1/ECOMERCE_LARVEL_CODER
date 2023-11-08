@extends('layout')
@section('content')
    <div class="container-fluid vh-100">
        {{-- Start catogries --}}
        <div class="sticky-top mt-3 catagories">
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

    </div>
@endsection
