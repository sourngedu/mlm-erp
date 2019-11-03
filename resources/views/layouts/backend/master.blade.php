
<!doctype html>
<html>
<head>
  <!-- meta, title, css, favicons, etc. -->
  <meta charset="utf-8">
  <title>@yield('page_title','admin dashboard')</title>
  <meta name="keywords" content="html5 bootstrap 3 admin template ui theme" />
  <meta name="description" content="admindesigns - shared on themelock.com">
  <meta name="author" content="admindesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font css (via cdn) -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300">
	<!-- theme css -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/default_skin/css/theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <!-- favicon -->
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
  @stack('css')
</head>

<body class="blank-page">
    <!-- start: theme preview pane -->
    <div id="skin-toolbox">
      @include('layouts.backend.includes.setting_theme')
    </div>
    <!-- end: theme preview pane -->
    <!-- start: main -->
    <div id="main">

        <!-- start: header -->
        <header class="navbar navbar-fixed-top bg-danger">
          @include('layouts.backend.includes.top_navbar')
        </header>
        <!-- end: header -->

        <!-- start: sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">
              <!-- start: sidebar header -->
                @include('layouts.backend.includes.left_sidebar')
              <!-- end: sidebar header -->
            </div>
        </aside>
        <!-- start: content-wrapper -->

        <section id="content_wrapper">
            <!-- start: topbar-dropdown -->
            <div id="topbar-dropmenu">
              @include('layouts.backend.includes.topbar_dropmenu')
            </div>
            <!-- end: topbar-dropdown -->

            <!-- start: topbar -->
            <header id="topbar">
              @include('layouts.backend.includes.topbar')
            </header>
            <!-- end: topbar -->

            <!-- begin: content -->
            <section id="content" class="animated fadein">
              @yield('content')
            </section>
            <!-- end: content -->
        </section>

        <!-- start: right sidebar -->
        <aside id="sidebar_right" class="nano">
            <div class="sidebar_right_content nano-content">
                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> server statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">db request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">server load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">server connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">traffic margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">database request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">server response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> server statistics <span class="pull-right text-primary fw600">usa</span> </h5>
                            <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- end: right sidebar -->

    </div>
    <!-- end: main -->


    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    @stack('js')

    <!-- Theme Javascript -->
    <script type="text/javascript" src="{{asset('assets/js/utility/utility.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
    {{-- <script type="text/javascript" src="assets/js/demo.js"></script> --}}
    <script type="text/javascript">
        jQuery(document).ready(function() {
            "use strict";
            // Init Theme Core
            Core.init();
            // Init Theme Core
            // Demo.init();
        });
    </script>
    <!-- END: PAGE SCRIPTS -->
</body>

</html>
