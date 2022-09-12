<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png')}}">
    <title>
        {{ $pageName ?? 'Area Admin' }} - RSUD Pasaman Barat
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('/assets/css/soft-ui-dashboard.css?v=1.0.6')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('layouts.aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layouts.navbar')
        <div class="container-fluid py-1">
            @yield('content')
            @include('sweetalert::alert')

        </div>
        @include('layouts.footer')
    </main>

    <!--   Core JS Files   -->
    <script src="{{ asset('/assets/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    {{-- ck editor --}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    {{-- end ck editor --}}
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/assets/js/soft-ui-dashboard.min.js?v=1.0.6')}}"></script>
    @stack("js")
</body>

</html>