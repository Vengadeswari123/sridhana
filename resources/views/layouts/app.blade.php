<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Sridhana </title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sri.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav style="font-size: 0.8em" class="navbar p-0 navbar-expand navbar-light bg-sripur">
            <div class="container-fluid p-0">
                <div class="w-100" id="navbarTogglerDemo01">
                    <ul class="navbar-nav justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link" href="tel:8220017983">613005</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="tel:8220017983">Toll Free : 8220017983</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="sticky-">


            <nav class="navbar navbar-expand navbar-light bg-light">
                <div class="container-fluid">
                    <div class="align-items-center  w-100 row">
                        <div class="col-4 col-md-4 d-none d-md-inline">
                            <form class="d-flex sri_search position-relative">
                                <input name='name' class="form-control me-2 ps-5" value="{{ request()->get('name') }}" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn po" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="col-8 col-md-4 text-lg-center">
                            <a class="navbar-brand" href="#"><img src="/storage/sri/logo.png" alt="" class="mx-auto" style="width: 3rem"></a>
                        </div>
                        <div class="col-4 col-md-4">
                            <ul class="navbar-nav flex-row-reverse">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img style="transform: scale(0.8)" src="/storage/sri/icons/heart.svg" alt="" class=""></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img style="transform: scale(0.8)" src="/storage/sri/icons/shopping-cart.svg" alt="" class=""></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img style="transform: scale(0.8)" src="/storage/sri/icons/user.svg" alt="" class=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-md navbar-light bg-srigreen">
                <div class="container-fluid">
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sarees</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kurtas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Combos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Bestsellers</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Weddings</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Hues</a>
                            </li>
                        </ul>
                    </div>
                    <form class="d-flex w-75 d-md-none sri_search position-relative">
                        <input class="form-control me-2 ps-5" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn po" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </nav>
        </div>


        <main class="mb-5">
            @yield('content')
        </main>
        <div class="bg-sripur py-5 mt-5 container-fluid">
            <div class="container text-white">

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <h6 class="fw-bold mb-3">Quick Links</h6>
                        <ul class="navbar-nav">
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <h6 class="fw-bold mb-3">Quick Links</h6>
                        <ul class="navbar-nav">
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <h6 class="fw-bold mb-3">Quick Links</h6>
                        <ul class="navbar-nav">
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <h6 class="fw-bold mb-3">Quick Links</h6>
                        <ul class="navbar-nav">
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                            <li class="nav-link py-0"><a href="" class="nav-item">Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
