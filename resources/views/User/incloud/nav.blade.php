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

    {{-- Font Gogle --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&family=Tajawal:wght@200;400;700;800&display=swap" rel="stylesheet">

    {{-- ajax --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white " href="#">
                {{-- <img src="{{ asset('Front/img/logo.png') }}" class="w-25" alt=""> --}}
                Navbar
            </a>
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
                    <li class="nav-item">
                        <button class=" nav-link btn btn-primary" type="button" data-bs-toggle="offcanvas"
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
            <button type="button" class="bg-primary border-0 text-white" data-bs-dismiss="offcanvas"
                aria-label="Close">
                <i class="fa-solid fa-angles-left  "></i>
            </button>
            <h5 class="offcanvas-title" id="offcanvasRightLabel">KLAZA</h5>
        </div>
        <div class="offcanvas-body bg-dark text-white">
            <div class="container-fluid">
                <ul class="list-group  w-100">
                    <a href="#" class="nav-link">
                        <li class="list-group">home</li>
                    </a>
                    <hr>
                    <a href="{{'shop_view'}}" class="nav-link d-flex p-2">
                        <li class="list-group">
                            Shop
                        </li>
                    </a>
                    <hr>
                    <a href="#" class="nav-link">
                        <li class="list-group">
                            Contact US
                        </li>
                    </a>
                    <hr>
                    <a href="#" class="nav-link">
                        <li class="list-group">
                            About
                        </li>
                    </a>
                    <hr>
                            <div class="dropdown">
                                <i class="text-white fa-solid fa-user dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                </i>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">logout</a></li>
                                  <li><a class="dropdown-item" href="./registerUser">Rigister</a></li>
                                  <li><a class="dropdown-item" href="#">Profaile</a></li>
                                </ul>
                              </div>
                    <hr>
                </ul>
            </div>
        </div>
    </div>
    {{-- End offcanvas  --}}
