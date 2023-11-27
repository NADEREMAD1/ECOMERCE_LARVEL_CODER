@extends('admin.layout')
@section('content')
    {{-- <form action="{{ route('createproducts') }}" method="POST" enctype="multipart/form-data">
        @include('User.incloud.errors')

        @csrf
        <div class="mb-3">
            <label for="Title" class="form-label">title</label>
            <input type="text" name="title" class="form-control" id="name" placeholder="name">
        </div>
        <div class="mb-3">
            <label for="Price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="Price" placeholder="Price">
        </div>
        <div class="mb-3">
            <label for="Dec" class="form-label">Dec</label>
            <input type="text" name="dec" class="form-control" id="Dec" placeholder="Dec">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">catogries_id</label>
            <input type="text" name="catogries_id" class="form-control" id="exampleFormControlInput1"
                placeholder="catagories id">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button class="btn-danger btn" type="submit">sub</button>
    </form> --}}

    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New Products</h4>
                    <form  class="form-sample" action="{{ route('createproducts') }}" method="POST" enctype="multipart/form-data">
                        @include('User.incloud.errors')
                        @csrf
                    <p class="card-description"> Personal info </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">price</label>
                                <div class="col-sm-9">
                                    <input type="number" name="price" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Dec</label>
                                <div class="col-sm-9">
                                    <input type="text" name="dec" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="catogries_id">
                                        @foreach ($catagories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                    @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="file" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control" id="file">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ofar</label>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="membershipRadios"
                                                id="membershipRadios1" value="" checked> Yes </label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="membershipRadios"
                                                id="membershipRadios2" value="option2"> No </label>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <button class="btn-danger btn" type="submit">sub</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>
                    <p class="card-description"> Add class <code>.table-hover</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Sale</th>
                                    <th>price</th>
                                    <th>Dec</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $pro)
                                    <tr>
                                        <td>{{ $pro->title }}</td>
                                        <td> <img src="{{ asset('image_products/' . $pro->image) }}" class="img-cat m-auto" width="50%"> </td>
                                        <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                                        <td>{{ $pro->price }}</td>
                                        <td>{{ $pro->dec }}</td>
                                        <td><button name="edit" class="badge badge-danger border-0">Edit</button></td>
                                        <td><button name="delete" class="badge badge-info border-0">Delete</button></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-5">
                            {{ $products->onEachSide(1)->links('pagination::simple-bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
