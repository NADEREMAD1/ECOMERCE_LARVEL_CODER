<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('Front/CSS/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white " href="#">Navbar</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto me-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="text-white fa-solid fa-house"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="text-white fa-solid fa-user"></i></a>
                    </li>
                    <li class="nav-item w-100">
                        <button class=" nav-link btn btn-primary " type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="text-white fa-solid fa-bars "></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Start offcanvas  --}}
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header  bg-dark text-white">
            <button type="button" class="bg-transparent text-white border border-none" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="fa-solid fa-angles-left "></i>
            </button>
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
        </div>
        <div class="offcanvas-body bg-dark text-white">
            <div class="container-fluid">
                <ul class="list-group  w-100">
                    <a href="#" class="nav-link">
                        <li class="list-group">An item</li>
                    </a>
                    <hr>

                    <a href="#" class="nav-link d-flex p-2">
                        <i class="fa-solid fa-angles-left"></i>
                        <li class="list-group">
                            <span class="">A second item</span>
                        </li>
                    </a>
                    <hr>
                    <a href="#" class="nav-link">
                        <li class="list-group">A third item</li>
                    </a>
                    <hr>
                    <a href="#" class="nav-link">
                        <li class="list-group">A fourth item</li>
                    </a>
                    <hr>
                    <a href="#" class="nav-link">
                        <li class="list-group">And a fifth one</li>
                    </a>
                    <hr>
                </ul>
            </div>
        </div>
    </div>
    {{-- End offcanvas  --}}
