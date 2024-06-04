
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/photo_2024-06-03_15-04-10.jpg') }}">
    <title>
        {{ config('app.name' ,'Laravel')}} | Admin
    </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <link rel="stylesheet" href="{{ asset('assets/css/print.min.css') }}">
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">


    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.min.css?v=3.0.6') }}" rel="stylesheet" />

</head>
<body class="g-sidenav-show  bg-gray-200">

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header" >
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="">
            <img src="{{ asset('assets/img/photo_2024-06-03_15-04-10.jpg') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">POS</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#Profile" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
                    <img src="{{ asset('assets/img/team-3.jpg') }}" class="avatar">
                    <span class="nav-link-text ms-2 ps-1">{{ Auth::user()->name }}</span>
                </a>
                <div class="collapse" id="Profile" style>
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white @yield('myprofil')" href="#">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
                            </a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link text-white @yield('pengaturan')" href="#">
                                    <span class="sidenav-mini-icon"> S </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Settings </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="sidenav-mini-icon"> L </span>
                                    <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0">
           <li class="nav-item">
               <a  data-bs-toggle="collapse" href="#ProductTab" class="nav-link text-white " aria-controls="ProductTab" role="button" aria-expanded="false">
                   <i class="material-icons-round opacity-10">inventory_2</i>
                   <span class="nav-link-text ms-2 ps-1">Product</span>
               </a>

               <div class="collapse " id="ProductTab">
                <ul class="nav ">
                    <li class="nav-item ">
                        <a class="nav-link text-white " href="../../pages/dashboards/analytics.html">
                            <span class="sidenav-mini-icon"> PL </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Product List </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white " href="../../pages/dashboards/discover.html">
                            <span class="sidenav-mini-icon"> CT </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Category </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white " href="../../pages/dashboards/sales.html">
                            <span class="sidenav-mini-icon"> S </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Sales </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white " href="../../pages/dashboards/automotive.html">
                            <span class="sidenav-mini-icon"> A </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Automotive </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white " href="../../pages/dashboards/smart-home.html">
                            <span class="sidenav-mini-icon"> S </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Smart Home </span>
                        </a>
                    </li>
                </ul>
            </div>
           </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white @yield('siswa')" role="button" >
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">diversity_3</i>
                    <span class="nav-link-text ms-2 ps-1">Data Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white @yield('kelas')" role="button">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">hotel_class</i>
                    <span class="nav-link-text ms-2 ps-1">Data Kelas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white @yield('perkembangan')" role="button">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">self_improvement</i>
                    <span class="nav-link-text ms-2 ps-1">Data Perkembangan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white @yield('cetak')" role="button">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">print</i>
                    <span class="nav-link-text ms-2 ps-1">Cetak Data</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">

                <h4 class="font-weight-bolder mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">@yield('page')</h4>
            </nav>
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-body p-0 position-relative">
                                <i class="material-icons me-sm-1">
                                    account_circle
                                </i>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="material-icons fixed-plugin-button-nav cursor-pointer">
                                    settings
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-4">
        <div class="col-xl-12 mx-auto">
            @yield('content')
        </div>


        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="#" class="font-weight-bold" target="_blank">Folanida</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://slbn11jkt.sch.id/" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>
    </div>

</main>


{{-- Alert --}}
<x-alert />


{{-- <script src="{{ asset('assets/js/core/popper.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script> --}}
{{-- <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    test
</script> --}}



{{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
<script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.6') }}"></script>

</body>
</html>
