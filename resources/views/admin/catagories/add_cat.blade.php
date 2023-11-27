@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('createCatagories') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title Catagories</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlFile1">Image Catagories</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button class="btn-info btn w-25" type="submit">Submit</button>
        </form>
    </div>
    <div class="container-fluid mt-3">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hoverable Table</h4>
                    <p class="card-description"> Add class <code>.table-hover</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Sale</th>
                                    <th>Status</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($catagories as $cat)
                                    <tr>
                                        <td>{{ $cat->title }}</td>
                                        <td> <img src="{{ asset('image_Catagories/' . $cat->image) }}" class="img-cat m-auto" width="50%"> </td>
                                        <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                                        <td><button name="edit" class="badge badge-danger border-0">Edit</button></td>
                                        <td><button name="delete" class="badge badge-info border-0">Delete</button></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-5">
                            {{ $catagories->onEachSide(1)->links('pagination::simple-bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
