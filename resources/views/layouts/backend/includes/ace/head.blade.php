		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>@yield('pagetitle','SourngEdu Admin Dashboard')</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{asset('ace/bs341/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('ace/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="{{asset('ace/css/fonts.googleapis.com.css')}}" />
		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('ace/css/ace.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="{{asset('ace/css/ace-part2.min.css')}}" class="ace-main-stylesheet" />
		<![endif]-->
		
		{{-- <link rel="stylesheet" href="{{asset('ace/css/ace-skins.min.css')}}" /> --}}

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="{{asset('ace/css/ace-ie.min.css')}}" />
		<![endif]-->

		<!-- inline styles related to this page -->
		<!-- ace settings handler -->
		<script src="{{asset('ace/js/ace-extra.min.js')}}"></script>
		<!-- HTML5shiv and Respond.js')}} for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="{{asset('ace/js/html5shiv.min.js')}}"></script>
		<script src="{{asset('ace/js/respond.min.js')}}"></script>
		<![endif]-->
		<link rel="stylesheet" href="{{asset('/css/sweetalert2.min.css')}}" />
		@stack('css')