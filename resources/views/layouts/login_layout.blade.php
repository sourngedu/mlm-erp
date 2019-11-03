<!DOCTYPE html>
<html>
<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>AdminDesigns - SHARED ON THEMELOCK.COM</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css')}}">
  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin-tools/admin-forms/css/admin-forms.css')}}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico')}}">

</head>

<body class="external-page sb-l-c sb-r-c">
    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">
        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>
            <!-- Begin: Content -->
            <section id="content">
              
              @yield('content')

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Page Plugins -->
    {{-- <script type="text/javascript" src="{{ asset('assets/js/pages/login/EasePack.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/login/rAF.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/login/TweenLite.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/login/login.js')}}"></script> --}}

    <!-- Theme Javascript -->
    <script type="text/javascript" src="{{ asset('assets/js/utility/utility.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js')}}"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/demo.js')}}"></script> --}}

    <!-- Page Javascript -->
    {{-- <script type="text/javascript">
        jQuery(document).ready(function() {
            "use strict";
            // Init Theme Core      
            Core.init();
            // Init Demo JS
            Demo.init();
            // Init CanvasBG and pass target starting location
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 3.3
                },
            });
        });
    </script> --}}
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
