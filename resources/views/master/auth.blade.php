<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>Atmos Admin Panel- Bootstrap 4 Based Admin Panel</title>
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png')}}"/>
<link rel="icon" href="{{ asset('assets/img/logo.png')}}" type="image/png" sizes="16x16">
<link rel="stylesheet" href="{{ asset('assets/vendor/pace/pace.css')}}">
<script src="{{ asset('assets/vendor/pace/pace.min.js')}}"></script>
<!--vendors-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/timepicker/bootstrap-timepicker.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/fonts/jost/jost.css')}}">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/materialdesignicons/materialdesignicons.min.css')}}">
<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/atmos.min.css')}}">
<!-- Additional library for page -->

</head>
<body class="jumbo-page">

<main class="admin-main  ">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-4  bg-white">
                <div class="row align-items-center m-h-100">
                    <div class="mx-auto col-md-8">
                        <div class="p-b-20 text-center">
                            <p>
                                <img src="{{ asset('assets/img/logo.svg')}}" width="80" alt="">

                            </p>
                        @yield('content')
                    </div>

                </div>
            </div>
            <div class="col-lg-8 d-none d-md-block bg-cover" style="background-image: url('assets/img/login.svg');">

            </div>
        </div>
    </div>
</main>




<script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{ asset('assets/vendor/popper/popper.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/vendor/select2/js/select2.full.min.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{ asset('assets/vendor/listjs/listjs.min.js')}}"></script>
<script src="{{ asset('assets/vendor/moment/moment.min.js')}}"></script>
<script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{ asset('assets/js/atmos.min.js')}}"></script>
<!--page specific scripts for demo-->


</body>
</html>