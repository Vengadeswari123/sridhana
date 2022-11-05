<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand p-0 fixed-top navbar-light bg-white navbar-admin-top">
            <div class="container-fluid p-0">
              <div class="navbar-brand pt-3 text-white  hide">
                <a href="">
                    <img src="\storage\pmmsy-logo.png" alt="" class="bg-white ms-4 me-2" style="width: 2rem">
                    <p class="d-inline fw-bold">{{ config('app.name', 'Laravel') }}</p>
                </a>
                @php
                    $xsign=$sign??0;
                @endphp
                @if(!$xsign || $xsign!=1)
                <button class="btn text-white p-0 mt-1 position-absolute" id="menu-button" onclick="navControl()">
                    <span style="margin-right: 0.25rem; letter-spacing: 0.15rem; font-size: 0.8em">MENU</span><i class="fas fa-bars"></i>
                </button>
                @endif
              </div>
              <ul class="navbar-nav ms-auto">
                @if(!$xsign || $xsign!=1)
                <li class="nav-item pe-4">
                    <a class="active no-foc" aria-current="page" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout <i class="fas fa-fw fa-sign-out-alt ms-2"></i> </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endif
            </ul>
            </div>
        </nav>
        <div class="side-edash hide">
            <div class="">
                <ul class="navbar-nav">
                     <li class="nav-item">
                        <a href="/admin/master" class="nav-elink">Master <i class="fas fa-fw fa-list"></i></a>
                    </li>
                    <li class="nav-item">
                       <a href="/admin/products" class="nav-elink">Products <i class="fas fa-fw fa-list"></i></a>
                   </li>
                    <li class="nav-item">
                        <a href="/admin/importexport" class="nav-elink">Import - Export <i class="fas fa-file-import    "></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <main class="side-emain  hide">

            <div class="container">
                @if(Session::has('status'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('status') }}</p>
                @endif
                @if(Session::has('error'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                @endif
            </div>


            @yield('content')
        </main>
    </div>
    <script>
        var toggle = 1;

        function navControl() {
            side = document.querySelector('.side-edash');
            brand = document.querySelector('.navbar-brand');
            main = document.querySelector('.side-emain');
            if (toggle) {
                side.classList.remove('hide')
                brand.classList.remove('hide')
                main.classList.remove('hide')
            } else {
                side.classList.add('hide')
                brand.classList.add('hide')
                main.classList.add('hide')
            }
            toggle = !toggle
        }
    </script>
</body>

</html>
