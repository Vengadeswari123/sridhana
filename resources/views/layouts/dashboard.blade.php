<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
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
                    <p class="d-inline fw-bold">eFFORTS</p>
                </a>

              </div>
              </ul>
            </div>
        </nav>
        <div class="side-edash hide">
            <div class="">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item">
                        <a href="" class="nav-elink">Dashboard <i class="fas fa-fw fa-home"></i></a>
                    </li> --}}
                     <li class="nav-item">
                        <a href="/admin/beneficiary" class="nav-elink">Beneficiary List <i class="fas fa-fw fa-user"></i></a>
                    </li>
                     <li class="nav-item">
                        <a href="/admin/boatdetails" class="nav-elink">Boat Details <i class="fas fa-fw fa-sailboat"></i></a>
                    </li>
                     <li class="nav-item">
                        <a href="/admin/master" class="nav-elink">Master <i class="fas fa-fw fa-list"></i></a>
                    </li>
                     <li class="nav-item">
                        {{-- <a class="nav-elink active" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Master Data  <i class="fas fa-database"></i>
                        </a> --}}
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body">
                                <ul class="navbar-down">
                                    <li class="nav-item">
                                        <a href="/admin/master/alliedactivity" class="nav-droplink"> Allied Activity</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/bank" class="nav-droplink"> Bank </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/branch" class="nav-droplink"> Branch </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/caste" class="nav-droplink"> Caste </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/castecategory" class="nav-droplink"> Caste Category </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/employement" class="nav-droplink"> Employment </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/fishingarea" class="nav-droplink"> Fishing Area </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/menu" class="nav-droplink"> Menu </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/qualification" class="nav-droplink"> Qualification </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/relationship" class="nav-droplink"> Relationship </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/religion" class="nav-droplink"> Religion </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/scheme" class="nav-droplink"> Scheme </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/society" class="nav-droplink"> Society </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/usermanage" class="nav-droplink"> User Creation </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/master/usertype" class="nav-droplink"> User Type </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="/admin/master/district" class="nav-droplink"> District </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/master/taluk" class="nav-droplink"> Taluk </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/master/village" class="nav-droplink"> Village </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/master/hamlet" class="nav-droplink"> Hamlet </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/master/vesselcategory" class="nav-droplink"> Vessel Category </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-elink" data-bs-toggle="collapse" href="#scheme2" role="button" aria-expanded="false" aria-controls="scheme">
                            Central Schemes  <i class="fas fa-ellipsis"></i>
                        </a>
                        <div class="collapse" id="scheme2">
                            <div class="card card-body">
                                <ul class="navbar-down">
                                    <li class="nav-item">
                                        <a href="/admin/scheme/central/pmmsy_development_of_deep_sea_fishing" class="nav-droplink">PMMSY -  Development of Deep Sea Fishing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/scheme/central/pmmsy_mcs" class="nav-droplink">PMMSY - Monitoring, Control and Survillance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/scheme/central/pmmsy_safety_and_security" class="nav-droplink">PMMSY - Strengthening of Safety and Security of Fishermen</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-elink" data-bs-toggle="collapse" href="#statescheme" role="button" aria-expanded="false" aria-controls="scheme">
                            State Schemes  <i class="fas fa-ellipsis-vertical"></i>
                        </a>
                        <div class="collapse" id="statescheme">
                            <div class="card card-body">
                                <ul class="navbar-down">
                                    <li class="nav-item">
                                        <a href="/admin/scheme/state/banrelief" class="nav-droplink">Ban Relief</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
