<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="container h-100 pt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-9">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body">
                        @include('User.incloud.errors')
                        <form action="{{ route('new_Register') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row align-items-center pt-4 pb-3">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">name</h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <input type="text" name="name" class="form-control form-control-lg" />
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        placeholder="example@example.com" />
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">password</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input type="password" name="password" class="form-control form-control-lg"
                                        placeholder="Enter Your Password" />
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">Upload Img</h6>
                                </div>

                                <div class="col-md-9 pe-5">
                                    <input name="image" class="form-control form-control-lg" id="formFileLg"
                                        type="file" />
                                    <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant
                                        file.
                                        Max file
                                        size 50 MB</div>
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="m-auto w-50">
                                <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </form>
                        <a href="{{route('show_login')}}" type="submit" class="btn btn-primary btn-lg">Have Acount</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.js"></script>
</body>

</html>
