<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        {{config('app.name','POS')}} | Register
    </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.min.css?v=3.0.6') }}" rel="stylesheet" />

    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>

</head>
<body class="bg-gray-200" >
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('{{ asset('https://images.unsplash.com/photo-1527769929977-c341ee9f2033?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90oy1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}')">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center  mb-0">Masuk</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" method="post" action="{{ route('login') }}" class="text-start">
                                @csrf
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Kata Sandi</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info shadow-info w-100 my-4 mb-2">Masuk</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

<script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script src="{{ asset('assets/js/plugins/sweetalert.min.js') }}"></script>

@if($errors->any())
@php
    $error = $errors->all();
@endphp
    <script type="text/javascript">
        swal.fire({
            icon: "error",
            title: 'Error',
            text: '{{$error[0]}}'
        })
    </script>
@endif

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.6') }}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7d6091912ce53f4c","version":"2023.4.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
</body>
</html>
