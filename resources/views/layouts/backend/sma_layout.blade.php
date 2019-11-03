<html>
<head>
	<meta charset="UTF-8">
	<base href="http://role58.edu"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('page-title','Sma Admin Layout')</title>
	<link rel="shortcut icon" href="{{asset('sma/images/icon.png')}}"/>
	<link href="{{asset('sma/styles/theme.css')}}" rel="stylesheet"/>
	<link href="{{asset('sma/styles/style.css')}}" rel="stylesheet"/>
	<script src="{{asset('sma/js/jquery-2.0.3.min.js')}}"></script>
	<script src="{{asset('sma/js/jquery-migrate-1.2.1.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('sma/multiselect/css/bootstrap-multiselect.css')}}" type="text/css">
	<script src="{{asset('sma/multiselect/js/bootstrap-multiselect.js')}}"></script>
	<noscript>
		<style type="text/css">
            #loading { display: none; }
        </style>
	</noscript>
	<script type="text/javascript">
		$(window).load(function () {
			$("#loading").fadeOut("slow");
		});
	</script>
</head>

<body>
	<noscript>
			<div class="global-site-notice noscript">
					<div class="notice-inner">
							<p><strong>JavaScript seems to be disabled in your browser.</strong><br>You must have JavaScript enabled in
									your browser to utilize the functionality of this website.</p>
					</div>
			</div>
	</noscript>
	<div id="loading"></div>
	<div id="app_wrapper">

		<header id="header" class="navbar">
			<div class="container">
				<a class="navbar-brand" href="#"><span class="logo">SMA Admin Layout</span></a>
				<div class="btn-group visible-xs pull-right btn-visible-sm">
						<button class="navbar-toggle btn" type="button" data-toggle="collapse" data-target="#sidebar_menu">
								<span class="fa fa-bars"></span>
						</button>
						<a href="#" class="btn">
								<span class="fa fa-user"></span>
						</a>
                    <a href="{{route('logout')}}" class="btn">
								<span class="fa fa-sign-out"></span>
						</a>
				</div>
				<div class="header-nav">
					<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
									<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
											<img alt="" src="#/" class="mini_avatar img-rounded">
											<div class="user">
													<span>ApplePhagna</span>
											</div>
									</a>
									<ul class="dropdown-menu pull-right">
											<li>
													<a href="#">
															<i class="fa fa-user"></i> Profile
													</a>
											</li>
											<li>
													<a href="#">Change Password</a>
											</li>
											<li class="divider"></li>
											<li>
													<a href="#">
															<i class="fa fa-sign-out"></i> Logout
													</a>
											</li>
									</ul>
							</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown hidden-xs"><a class="btn tip" title="Dashboard" data-placement="bottom" href="#"></i></a></li>
						<li class="dropdown hidden-sm">
							<a class="btn tip" title="Settings" data-placement="bottom" href="http://role58.edu"><i class="fa fa-cogs"></i>
							</a>
						</li>
						<li class="dropdown hidden-xs">
								<a class="btn tip" title="Calculator" data-placement="bottom" href="#" data-toggle="dropdown">
										<i class="fa fa-calculator"></i>
								</a>
								<ul class="dropdown-menu pull-right calc">
										<li class="dropdown-content">
												<span id="inlineCalc"></span>
										</li>
								</ul>
						</li>
						{{-- <li class="dropdown hidden-sm">
								<a class="btn tip" title="notifications" data-placement="bottom" href="#" data-toggle="dropdown">
										<i class="fa fa-info-circle"></i>
										<span class="number blightOrange black">Info</span>
								</a>
								<ul class="dropdown-menu pull-right content-scroll">
										<li class="dropdown-header"><i class="fa fa-info-circle"></i>notifications</li>
										<li class="dropdown-content">
												<div class="scroll-div">
														<div class="top-menu-scroll">
																<ol class="oe">

																</ol>
														</div>
												</div>
										</li>
								</ul>
						</li> --}}
						{{-- <li class="dropdown hidden-xs">
								<a class="btn tip" title="calendar" data-placement="bottom" href="#" data-toggle="dropdown">
										<i class="fa fa-calendar"></i>
										<span class="number blightOrange black">Sizeof</span>
								</a>
								<ul class="dropdown-menu pull-right content-scroll">
										<li class="dropdown-header">
										<i class="fa fa-calendar"></i>upcoming
										</li>
										<li class="dropdown-content">
												<div class="top-menu-scroll">
														<ol class="oe">

														</ol>
												</div>
										</li>
										<li class="dropdown-footer">
												<a href="#" class="btn-block link">
														<i class="fa fa-calendar"></i>calendar
												</a>
										</li>
								</ul>
						</li> --}}
						<li class="dropdown hidden-xs">
								<a class="btn tip" title="Calendar" data-placement="bottom" href="#">Calendar
										<i class="fa fa-calendar"></i>
								</a>
						</li>
						<li class="dropdown hidden-sm">
							<a class="btn tip" title="Style" data-placement="bottom" data-toggle="dropdown"
							href="#"><i class="fa fa-css3"></i>
							</a>
							<ul class="dropdown-menu pull-right">
								<li class="bwhite noPadding">
									<a href="#" id="fixed" class="">
											<i class="fa fa-angle-double-left"></i>
											<span id="fixedText">Fixed</span>
									</a>
									<a href="#" id="cssLight" class="grey">
											<i class="fa fa-stop"></i> Grey
									</a>
									<a href="#" id="cssBlue" class="blue">
											<i class="fa fa-stop"></i> Blue
									</a>
											<a href="#" id="cssPink" class="pink">
											<i class="fa fa-stop"></i> Pink
									</a>
									<a href="#" id="cssGreen" class="green">
											<i class="fa fa-stop"></i> Green
									</a>
									<a href="#" id="cssBlack" class="black">
									<i class="fa fa-stop"></i> Black
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown hidden-xs">
								<a class="btn tip" title="Language" data-placement="bottom" data-toggle="dropdown"
								href="#">
										<img src="#" alt="">
								</a>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="#">
											<img src="http://role58.edu" class="language-img">
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="welcome/toggle_rtl') ?>">
												<i class="fa fa-align-"></i>
										</a>
									</li>
								</ul>
						</li>
						<li class="dropdown hidden-sm">
								<a class="btn blightOrange tip" title="Alert"
										data-placement="left" data-toggle="dropdown" href="#">
										<i class="fa fa-exclamation-triangle"></i>
								</a>
								<ul class="dropdown-menu pull-right">
										<li>
												<a href="#" class="">
														<span class="label label-danger pull-right" style="margin-top:3px;"></span>
														<span style="padding-right: 35px;"></span>
												</a>
										</li>
								</ul>
						</li>
						<li class="dropdown hidden-xs">
							<a class="btn bdarkGreen tip" title="POS" data-placement="bottom" href="#">
								<i class="fa fa-th-large"></i> <span class="padding05">POS</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</header>

		<div class="container" id="container">
				<div class="row" id="main-con">
					<table class="lt">
						<tr>

							<td class="sidebar-con">
								<div id="sidebar-left" style="min-height: 811px;">
									<div class="sidebar-nav nav-collapse collapse navbar-collapse" id="sidebar_menu">
										<ul class="nav main-menu">
												<li class="mm_welcome active">
													<a href="http://localhost/full_project/weerp_v3_23-01-19/">
													<i class="fa fa-dashboard"></i>
													<span class="text"> dashboard</span>
													</a>
												</li>
												<li class="mm_products mm_transfers">
													<a class="dropmenu" href="#">
													<i class="fa fa-barcode"></i>
													<span class="text"> products </span>
													<span class="chevron closed"></span>
													</a>
													<ul>
														<li id="products_index">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/products">
														<i class="fa fa-barcode"></i>
														<span class="text"> list products</span>
														</a>
														</li>
														<li id="products_import_csv">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/products/import_csv">
														<i class="fa fa-file-text"></i>
														<span class="text"> import products</span>
														</a>
														</li>
														<li id="products_print_barcodes">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/products/print_barcodes">
														<i class="fa fa-tags"></i>
														<span class="text"> print barcode/label</span>
														</a>
														</li>

														<li id="products_using_stocks">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/products/using_stocks">
														<i class="fa fa-filter"></i>
														<span class="text"> using stocks</span>
														</a>
														</li>
														<li id="products_stock_counts">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/products/stock_counts">
														<i class="fa fa-list-ol"></i>
														<span class="text"> stock counts</span>
														</a>
														</li>
														<li id="products_quantity_adjustments">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/products/quantity_adjustments">
														<i class="fa fa-filter"></i>
														<span class="text"> quantity adjustments</span>
														</a>
														</li>
														<li id="products_cost_adjustments">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/products/cost_adjustments">
														<i class="fa fa-filter"></i>
														<span class="text"> cost adjustments</span>
														</a>
														</li>
														<li id="products_converts">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/products/converts">
														<i class="fa fa-list-ol"></i>
														<span class="text"> converts</span>
														</a>
														</li>

														<li id="transfers_index">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/transfers">
														<i class="fa fa-star-o"></i><span class="text"> list transfers</span>
														</a>
														</li>
													</ul>
												</li>

												<li class="mm_loans ">
													<a class="dropmenu" href="#">
														<i class="fa fa-heart"></i>
														<span class="text"> loans </span>
														<span class="chevron closed"></span>
													</a>
													<ul>
														<li id="loans_add_loan">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/loans/add_loan">
														<i class="fa fa-heart-o"></i>
														<span class="text"> new loan</span>
														</a>
														</li>
														<li id="loans_index">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/loans">
														<i class="fa fa-heart-o"></i>
														<span class="text"> list loans</span>
														</a>
														</li>
														<li id="loans_missing_loans">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/loans/missing_loans">
														<i class="fa fa-heart-o"></i>
														<span class="text"> missed payments</span>
														</a>
														</li>
													</ul>
												</li>

												<li class="mm_sales mm_deliveries mm_quotes mm_sale_orders ">
													<a class="dropmenu" href="#">
													<i class="fa fa-heart"></i>
													<span class="text"> sales 
													</span> <span class="chevron closed"></span>
													</a>
													<ul>
														<li id="quotes_index">
															<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/quotes">
															<i class="fa fa-heart-o"></i>
															<span class="text"> list quotation</span>
															</a>
														</li>
														<li id="sale_orders_index">
															<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/sale_orders">
															<i class="fa fa-heart-o"></i>
															<span class="text"> list sale orders</span>
															</a>
														</li>
														<li id="sales_index">
															<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/sales">
															<i class="fa fa-heart"></i>
															<span class="text"> list sales</span>
															</a>
														</li>
														<li id="pos_sales">
															<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/pos/sales">
															<i class="fa fa-heart"></i>
															<span class="text"> pos sales</span>
															</a>
														</li>
														<li id="deliveries_index">
															<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/deliveries">
															<i class="fa fa-truck"></i>
															<span class="text"> deliveries</span>
															</a>
														</li>
														<li id="sales_returns">
															<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/sales/returns">
															<i class="fa fa-heart"></i>
															<span class="text"> list returns</span>
															</a>
															</li>
														<li id="sales_gift_cards">
															<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/sales/gift_cards">
															<i class="fa fa-gift"></i>
															<span class="text"> list gift cards</span>
															</a>
														</li>
													</ul>
												</li>

												<li class="mm_purchases mm_purchase_orders mm_purchase_requests">
													<a class="dropmenu" href="#">
													<i class="fa fa-star"></i>
													<span class="text"> purchases 
													</span> <span class="chevron closed"></span>
													</a>
													<ul>
														<li id="purchase_requests_index">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/purchase_requests">
														<i class="fa fa-heart-o"></i>
														<span class="text"> list purchase requests</span>
														</a>
														</li>
														<li id="purchase_orders_index">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/purchase_orders">
														<i class="fa fa-heart-o"></i>
														<span class="text"> list purchase orders</span>
														</a>
														</li>
														<li id="purchases_index">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/purchases">
														<i class="fa fa-star"></i>
														<span class="text"> list purchases</span>
														</a>
														</li>	

														<li id="purchases_receives">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/purchases/receives">
														<i class="fa fa-star"></i>
														<span class="text"> list receive items</span>
														</a>
														</li>
														<li id="purchases_purchase_return">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/purchases/purchase_return">
														<i class="fa fa-heart-o"></i>
														<span class="text"> list purchase return</span>
														</a>
														</li>
														<li id="purchases_expenses">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/purchases/expenses">
														<i class="fa fa-dollar"></i>
														<span class="text"> list expenses</span>
														</a>
														</li>

													</ul>
												</li>

												<li class="mm_accountings ">
													<a class="dropmenu" href="#">
													<i class="fa fa-heart"></i>
													<span class="text"> accountings 
													</span> <span class="chevron closed"></span>
													</a>
													<ul>
														<li id="accountings_index">
															<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/accountings">
															<i class="fa fa-heart-o"></i>
															<span class="text"> list chart accounts</span>
															</a>
														</li>
														<li id="accountings_enter_journals">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/accountings/enter_journals">
														<i class="fa fa-heart-o"></i>
														<span class="text"> list enter journals</span>
														</a>
														</li>
														<li id="accountings_journals">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/accountings/journals">
														<i class="fa fa-bars"></i>
														<span class="text"> list journals</span>
														</a>
														</li>
														<li id="accountings_general_ledger">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/accountings/general_ledger">
														<i class="fa fa-bars"></i><span class="text"> general ledger</span>
														</a>
														</li>
														<li id="accountings_trial_balance">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/accountings/trial_balance">
														<i class="fa fa-bars"></i><span class="text"> trial balance</span>
														</a>
														</li>
														<li id="accountings_income_statement">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/accountings/income_statement">
														<i class="fa fa-bars"></i><span class="text"> income statement</span>
														</a>
														</li>
														<li id="accountings_balance_sheet">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/accountings/balance_sheet">
														<i class="fa fa-bars"></i><span class="text"> balance sheet</span>
														</a>
														</li>
														<li id="accountings_cash_flow">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/accountings/cash_flow">
														<i class="fa fa-bars"></i><span class="text"> cash flow</span>
														</a>
														</li>
														<li id="accountings_cash_books">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/accountings/cash_books">
														<i class="fa fa-bars"></i><span class="text"> cash book</span>
														</a>
														</li>
													</ul>
												</li>
												
												<li class="mm_auth mm_customers mm_suppliers">
													<a class="dropmenu" href="#">
													<i class="fa fa-users"></i>
													<span class="text"> people </span> 
													<span class="chevron closed"></span>
													</a>
													<ul>
														<li id="auth_users">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/users">
														<i class="fa fa-users"></i><span class="text"> list users</span>
														</a>
														</li>
														<li id="customers_index">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/customers">
														<i class="fa fa-users"></i><span class="text"> list customers</span>
														</a>
														</li>
														<li id="suppliers_index">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/suppliers">
														<i class="fa fa-users"></i><span class="text"> list suppliers</span>
														</a>
														</li>
													</ul>
												</li>

												<li class="mm_hr">
													<a class="dropmenu" href="#">
													<i class="fa fa-users"></i>
													<span class="text"> hr </span> 
													<span class="chevron closed"></span>
													</a>
													<ul>
														<li id="hr_index">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/hr">
														<i class="fa fa-users"></i><span class="text"> list employees</span>
														</a>
														</li>
														<li id="hr_positions">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/hr/positions">
														<i class="fa fa-users"></i><span class="text"> list positions</span>
														</a>
														</li>
														<li id="hr_departments">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/hr/departments">
														<i class="fa fa-users"></i><span class="text"> list departments</span>
														</a>
														</li>
														<li id="hr_groups">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/hr/groups">
														<i class="fa fa-users"></i><span class="text"> list groups</span>
														</a>
														</li>
														<li id="hr_employee_types">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/hr/employee_types">
														<i class="fa fa-users"></i><span class="text"> employee types</span>
														</a>
														</li>
														<li id="hr_employees_relationships">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/hr/employees_relationships">
														<i class="fa fa-users"></i><span class="text"> family relationships</span>
														</a>
														</li>
														<li id="hr_tax_conditions">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/hr/tax_conditions">
														<i class="fa fa-users"></i><span class="text"> tax conditions</span>
														</a>
														</li>
													</ul>
												</li>

												<li class="mm_attendances">
													<a class="dropmenu" href="#">
													<i class="fa fa-users"></i>
													<span class="text"> attendances </span> 
													<span class="chevron closed"></span>
													</a>
													<ul>
														<li id="attendances_approve_attendances">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/attendances/approve_attendances">
														<i class="fa fa-users"></i><span class="text"> approve att</span>
														</a>
														</li>
														<li id="attendances_cancel_attendances">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/attendances/cancel_attendances">
														<i class="fa fa-users"></i><span class="text"> cancel att</span>
														</a>
														</li>
													</ul>
												</li>
												
												<li class="mm_notifications">
													<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/notifications">
													<i class="fa fa-info-circle"></i><span class="text"> notifications</span>
													</a>
												</li>

												<li class="mm_system_settings mm_billers mm_pos">
													<a class="dropmenu" href="#">
													<i class="fa fa-cog"></i><span class="text"> settings </span> 
													<span class="chevron closed"></span>
													</a>
													<ul>
														<li id="system_settings_index">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings">
														<i class="fa fa-cog"></i><span class="text"> system settings</span>
														</a>
														</li>
														<li id="pos_settings">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/pos/settings">
														<i class="fa fa-th-large"></i><span class="text"> pos settings</span>
														</a>
														</li>
														<li id="system_settings_change_logo">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/change_logo" data-toggle="modal" data-target="#mymodal">
														<i class="fa fa-upload"></i><span class="text"> change logo</span>
														</a>
														</li>
														<li id="billers_index">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/billers">
														<i class="fa fa-users"></i><span class="text"> list billers</span>
														</a>
														</li>
														<li id="system_settings_projects">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/projects">
														<i class="fa fa-users"></i><span class="text"> list projects</span>
														</a>
														</li>
														<li id="system_settings_warehouses">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/warehouses">
														<i class="fa fa-building-o"></i><span class="text"> warehouses</span>
														</a>
														</li>
														<li id="system_settings_expense_categories">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/expense_categories">
														<i class="fa fa-folder-open"></i><span class="text"> expense categories</span>
														</a>
														</li>
														<li id="system_settings_categories">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/categories">
														<i class="fa fa-folder-open"></i><span class="text"> categories</span>
														</a>
														</li>
														<li id="system_settings_loan_terms">
															<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/loan_terms">
															<i class="fa fa-users"></i><span class="text"> loan terms</span>
															</a>
														</li>
														<li id="system_settings_frequencies">
															<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/frequencies">
															<i class="fa fa-users"></i><span class="text"> frequencies</span>
															</a>
														</li>
														<li id="system_settings_units">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/units">
														<i class="fa fa-wrench"></i><span class="text"> units</span>
														</a>
														</li>
														<li id="system_settings_brands">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/brands">
														<i class="fa fa-th-list"></i><span class="text"> brands</span>
														</a>
														</li>
														<li id="products_bom">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/products/boms">
														<i class="fa fa-list-ol"></i>
														<span class="text"> boms</span>
														</a>
														</li>
														<li id="system_settings_customer_groups">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/customer_groups">
														<i class="fa fa-chain"></i><span class="text"> customer groups</span>
														</a>
														</li>

														<li id="system_settings_price_groups">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/price_groups">
														<i class="fa fa-dollar"></i><span class="text"> price groups</span>
														</a>
														</li>
														<li id="system_settings_customer_groups">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/payment_terms">
														<i class="fa fa-chain"></i><span class="text"> payment terms</span>
														</a>
														</li>
														<li id="system_settings_currencies">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/currencies">
														<i class="fa fa-money"></i><span class="text"> currencies</span>
														</a>
														</li>
														<li id="system_customer_opening_balances">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/sales/customer_opening_balances">
														<i class="fa fa-dollar"></i><span class="text"> customer opening balances</span>
														</a>
														</li>
														<li id="system_supplier_opening_balances">
														<a class="submenu" href="http://localhost/full_project/weerp_v3_23-01-19/purchases/supplier_opening_balances">
														<i class="fa fa-dollar"></i><span class="text"> supplier opening balances</span>
														</a>
														</li>
														<li id="system_settings_tax_rates">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/tax_rates">
														<i class="fa fa-plus-circle"></i><span class="text"> tax rates</span>
														</a>
														</li>
														<li id="pos_printers">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/pos/printers">
														<i class="fa fa-print"></i><span class="text"> list printers</span>
														</a>
														</li>
														<li id="system_settings_email_templates">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/email_templates">
														<i class="fa fa-envelope"></i><span class="text"> email templates</span>
														</a>
														</li>
														<li id="system_settings_user_groups">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/user_groups">
														<i class="fa fa-key"></i><span class="text"> group permissions</span>
														</a>
														</li>
														<li id="system_settings_login_time">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/login_time">
														<i class="fa fa-clock-o"></i><span class="text"> login times</span>
														</a>
														</li>
														<li id="system_settings_backups">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/system_settings/backups">
														<i class="fa fa-database"></i><span class="text"> backups</span>
														</a>
														</li>
													</ul>
												</li>

												<li class="mm_reports">
													<a class="dropmenu" href="#">
													<i class="fa fa-bar-chart-o"></i>
													<span class="text"> reports </span> 
													<span class="chevron closed"></span>
													</a>
													<ul>
														<li id="reports_index">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports">
														<i class="fa fa-bars"></i><span class="text"> overview chart</span>
														</a>
														</li>
														<li id="reports_warehouse_stock">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/warehouse_stock">
														<i class="fa fa-building"></i><span class="text"> warehouse stock chart</span>
														</a>
														</li>
														<li id="reports_best_sellers">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/best_sellers">
														<i class="fa fa-line-chart"></i><span class="text"> best sellers</span>
														</a>
														</li>

														<li id="reports_quantity_alerts">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/quantity_alerts">
														<i class="fa fa-bar-chart-o"></i><span class="text"> product quantity alerts</span>
														</a>
														</li>
														<li id="reports_expiry_alerts">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/expiry_alerts">
														<i class="fa fa-bar-chart-o"></i><span class="text"> product expiry alerts</span>
														</a>
														</li>
														<li id="reports_brands">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/brands">
														<i class="fa fa-cubes"></i><span class="text"> brands report</span>
														</a>
														</li>
														<li id="reports_categories">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/categories">
														<i class="fa fa-folder-open"></i><span class="text"> categories report</span>
														</a>
														</li>

														<li id="reports_products">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/products">
														<i class="fa fa-barcode"></i><span class="text"> products report</span>
														</a>
														</li>

														<li id="reports_inventory_in_out">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/inventory_in_out">
														<i class="fa fa-barcode"></i><span class="text"> inventory in / out</span>
														</a>
														</li>
														<li id="reports_adjustments">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/adjustments">
														<i class="fa fa-filter"></i><span class="text"> adjustments report</span>
														</a>
														</li>
														<li id="reports_cost_adjustments">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/cost_adjustments">
														<i class="fa fa-filter"></i><span class="text"> cost adjustments report</span>
														</a>
														</li>

														<li id="reports_products_promotion_report">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/products_promotion_report">
														<i class="fa fa-barcode"></i><span class="text"> products promotion report</span>
														</a>
														</li>
														<li id="reports_product_sales_report">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/product_sales_report">
														<i class="fa fa-barcode"></i><span class="text"> product sales report</span>
														</a>
														</li>
														<li id="reports_count_money">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/count_money_report">
														<i class="fa fa-th-large"></i><span class="text"> count money report</span>
														</a>
														</li>
														<li id="reports_register">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/register">
														<i class="fa fa-th-large"></i><span class="text"> register report</span>
														</a>
														</li>
														<li id="reports_cash_register_report">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/cash_register_report">
														<i class="fa fa-th-large"></i><span class="text"> cash register report</span>
														</a>
														</li>
														<li id="reports_saleman_report">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/saleman_report">
														<i class="fa fa-heart"></i><span class="text"> saleman report</span>
														</a>
														</li>
														<li id="reports_saleman_group_report">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/saleman_group_report">
														<i class="fa fa-heart"></i><span class="text"> saleman group report</span>
														</a>
														</li>
														<li id="reports_saleman_detail_report">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/saleman_detail_report">
														<i class="fa fa-heart"></i><span class="text"> saleman detail report</span>
														</a>
														</li>	

														<li id="reports_ar_customer">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/ar_customer">
														<i class="fa fa-heart"></i><span class="text"> a/r by customer</span>
														</a>
														</li>

														<li id="reports_ap_supplier">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/ap_supplier">
														<i class="fa fa-heart"></i><span class="text"> a/p by supplier</span>
														</a>
														</li>

														<li id="reports_ar_aging">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/ar_aging">
														<i class="fa fa-heart"></i><span class="text"> a/r aging</span>
														</a>
														</li>


														<li id="reports_ap_aging">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/ap_aging">
														<i class="fa fa-heart"></i><span class="text"> a/p aging</span>
														</a>
														</li>
														<li id="reports_daily_sales">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/daily_sales">
														<i class="fa fa-calendar"></i><span class="text"> daily sales</span>
														</a>
														</li>
														<li id="reports_monthly_sales">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/monthly_sales">
														<i class="fa fa-calendar"></i><span class="text"> monthly sales</span>
														</a>
														</li>

														<li id="reports_sales">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/sales">
														<i class="fa fa-heart"></i><span class="text"> sales report</span>
														</a>
														</li>
														<li id="reports_sales">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/sales_detail">
														<i class="fa fa-heart"></i><span class="text"> sale detail report</span>
														</a>
														</li>

														<li id="reports_daily_purchases">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/daily_purchases">
														<i class="fa fa-calendar"></i><span class="text"> daily purchases</span>
														</a>
														</li>
														<li id="reports_monthly_purchases">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/monthly_purchases">
														<i class="fa fa-calendar"></i><span class="text"> monthly purchases</span>
														</a>
														</li>
														<li id="reports_purchases">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/purchases">
														<i class="fa fa-star"></i><span class="text"> purchases report</span>
														</a>
														</li>
														<li id="reports_expenses">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/expenses">
														<i class="fa fa-star"></i><span class="text"> expenses report</span>
														</a>
														</li>
														<li id="reports_payments">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/payments">
														<i class="fa fa-money"></i><span class="text"> payments report</span>
														</a>
														</li>

														<li id="reports_profit_loss">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/profit_loss">
														<i class="fa fa-money"></i><span class="text"> profit and/or loss</span>
														</a>
														</li>
														<li id="reports_customers">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/customers">
														<i class="fa fa-users"></i><span class="text"> customers report</span>
														</a>
														</li>
														<li id="reports_suppliers">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/suppliers">
														<i class="fa fa-users"></i><span class="text"> suppliers report</span>
														</a>
														</li>
														<li id="reports_staff_report">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/users">
														<i class="fa fa-users"></i><span class="text"> staff report</span>
														</a>
														</li>
														<li id="reports_audit_logs">
														<a href="http://localhost/full_project/weerp_v3_23-01-19/reports/audit_logs">
														<i class="fa fa-search"></i><span class="text"> audit logs</span>
														</a>
														</li>
													</ul>
												</li>
										</ul>
									</div>
									<a href="#" id="main-menu-act" class="full visible-md visible-lg">
										<i class="fa fa-angle-double-left"></i>
									</a>
								</div>
							</td>
							
              <td class="content-con">
								<div id="content" style="min-height: 811px;">
									<div class="row">
											<div class="col-sm-12 col-md-12">
												<ul class="breadcrumb">
													<li class="active">dashboard</li>
													<li class="right_log hidden-xs">your ip address ::1 
														<span class="hidden-sm">( last login at: 01/08/2019 14:24  )</span>
													</li>
												</ul>
											</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="alerts-con"></div>
											<div class="box hidden" style="margin-bottom: 15px;">
												<div class="box-header">
														<h2 class="blue"><i class="fa-fw fa fa-bar-chart-o"></i>overview chart</h2>
												</div>
												<div class="box-content">
													<div class="row">
														<div class="col-md-12">
															<p class="introtext">stock overview chart including monthly sales with product tax and  order tax (columns), purchases (line) and current stock value by cost and price (pie). you can save the graph as jpg, png and pdf.</p>
														</div>
													</div>
												</div>
											</div>
												
											<div class="row" style="margin-bottom: 15px;">
													<div class="col-lg-12">
															<div class="box">
																	<div class="box-header">
																			<h2 class="blue"><i class="fa fa-th"></i><span class="break"></span>quick links</h2>
																	</div>
																	<div class="box-content">
																		<div class="col-lg-1 col-md-2 col-xs-6">
																				<a class="bblue white quick-button small" href="http://localhost/full_project/weerp_v3_23-01-19/products">
																						<i class="fa fa-barcode"></i>

																						<p>products</p>
																				</a>
																		</div>
																		<div class="col-lg-1 col-md-2 col-xs-6">
																				<a class="bdarkgreen white quick-button small" href="http://localhost/full_project/weerp_v3_23-01-19/sales">
																						<i class="fa fa-heart"></i>

																						<p>sales</p>
																				</a>
																		</div>

																		<div class="col-lg-1 col-md-2 col-xs-6">
																				<a class="blightorange white quick-button small" href="http://localhost/full_project/weerp_v3_23-01-19/quotes">
																						<i class="fa fa-heart-o"></i>

																						<p>quotations</p>
																				</a>
																		</div>

																		<div class="col-lg-1 col-md-2 col-xs-6">
																				<a class="bred white quick-button small" href="http://localhost/full_project/weerp_v3_23-01-19/purchases">
																						<i class="fa fa-star"></i>

																						<p>purchases</p>
																				</a>
																		</div>

																		<div class="col-lg-1 col-md-2 col-xs-6">
																				<a class="bpink white quick-button small" href="http://localhost/full_project/weerp_v3_23-01-19/transfers">
																						<i class="fa fa-star-o"></i>

																						<p>transfers</p>
																				</a>
																		</div>

																		<div class="col-lg-1 col-md-2 col-xs-6">
																				<a class="bgrey white quick-button small" href="http://localhost/full_project/weerp_v3_23-01-19/customers">
																						<i class="fa fa-users"></i>

																						<p>customers</p>
																				</a>
																		</div>

																		<div class="col-lg-1 col-md-2 col-xs-6">
																				<a class="bgrey white quick-button small" href="http://localhost/full_project/weerp_v3_23-01-19/suppliers">
																						<i class="fa fa-users"></i>

																						<p>suppliers</p>
																				</a>
																		</div>

																		<div class="col-lg-1 col-md-2 col-xs-6">
																				<a class="blightblue white quick-button small" href="http://localhost/full_project/weerp_v3_23-01-19/notifications">
																						<i class="fa fa-comments"></i>

																						<p>notifications</p>
																						<!--<span class="notification green">4</span>-->
																				</a>
																		</div>

																		<div class="col-lg-1 col-md-2 col-xs-6">
																				<a class="bblue white quick-button small" href="http://localhost/full_project/weerp_v3_23-01-19/auth/users">
																						<i class="fa fa-group"></i>
																						<p>users</p>
																				</a>
																		</div>
																		<div class="col-lg-1 col-md-2 col-xs-6">
																				<a class="bblue white quick-button small" href="http://localhost/full_project/weerp_v3_23-01-19/system_settings">
																						<i class="fa fa-cogs"></i>

																						<p>settings</p>
																				</a>
																		</div>
																		<div class="clearfix"></div>
																	</div>
															</div>
													</div>
											</div>

											 {{-- latest five --}}
											<div class="row" style="margin-bottom: 15px;">
												<div class="col-md-12">
													<div class="box">
														<div class="box-header">
																<h2 class="blue"><i class="fa-fw fa fa-tasks"></i> latest five</h2>
														</div>
														<div class="box-content">
															<div class="row">
																<div class="col-md-12">
																		<ul id="dbtab" class="nav nav-tabs">
																				<li class="active"><a href="#sales">sales</a></li>
																				<li class=""><a href="#quotes">quotations</a></li>
																				<li class=""><a href="#purchases">purchases</a></li>
																				<li class=""><a href="#transfers">transfers</a></li>
																				<li class=""><a href="#customers">customers</a></li>
																				<li class=""><a href="#suppliers">suppliers</a></li>
																		</ul>

																		<div class="tab-content">																							
																			<div id="sales" class="tab-pane in active">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="table-responsive">
																							<table id="sales-tbl" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped" style="margin-bottom: 0;">
																								<thead>
																								<tr>
																									<th style="width:30px !important;">#</th>
																									<th>date</th>
																									<th>reference no</th>
																									<th>customer</th>
																									<th>status</th>
																									<th>total</th>
																									<th>payment status</th>
																									<th>paid</th>
																								</tr>
																								</thead>
																								<tbody>
																									<tr id="240" class="receipt_link"><td>1</td>
																										<td>22/01/2019 14:57</td>
																										<td>pos/2019/01/0147</td>
																										<td>general customer / អតិថិជនទូទៅ</td>
																										<td><div class="text-center"><span class="label label-success">completed</span></div></td>
																										<td class="text-right">29.00</td>
																										<td><div class="text-center"><span class="label label-info">partial</span></div></td>
																										<td class="text-right">290.00</td>
																									</tr>																																																									
																								</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																			</div>
																			
																			<div id="quotes" class="tab-pane fade">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="table-responsive">
																							<table id="quotes-tbl" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped" style="margin-bottom: 0;">
																									<thead>
																										<tr>
																											<th style="width:30px !important;">#</th>
																											<th>date</th>
																											<th>reference no</th>
																											<th>customer</th>
																											<th>status</th>
																											<th>amount</th>
																										</tr>
																									</thead>
																									<tbody>
																										<tr id="8" class="quote_link"><td>1</td>
																											<td>21/01/2019 12:11</td>
																											<td>qt/2019/01/0004</td>
																											<td>general customer / អតិថិជនទូទៅ</td>
																											<td><div class="text-center"><span class="label label-success">completed</span></div></td>
																											<td class="text-right">180,000.00</td>
																										</tr>                                                
																									</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																			</div>
																				
																			<div id="purchases" class="tab-pane fade in">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="table-responsive">
																							<table id="purchases-tbl" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped" style="margin-bottom: 0;">
																								<thead>
																									<tr>
																										<th style="width:30px !important;">#</th>
																										<th>date</th>
																										<th>reference no</th>
																										<th>supplier</th>
																										<th>status</th>
																										<th>amount</th>
																									</tr>
																								</thead>
																								<tbody>	
																									<tr>
																										<td colspan="6" class="datatables_empty">no data available</td>
																									</tr>
																								</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																			</div>
																			
																			<div id="transfers" class="tab-pane fade">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="table-responsive">
																							<table id="transfers-tbl" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped" style="margin-bottom: 0;">
																								<thead>
																									<tr>
																											<th style="width:30px !important;">#</th>
																											<th>date</th>
																											<th>reference no</th>
																											<th>from</th>
																											<th>to</th>
																											<th>status</th>
																											<th>amount</th>
																									</tr>
																								</thead>
																								<tbody>
																									<tr id="4" class="transfer_link">
																										<td>1</td>
																										<td>11/01/2019 05:07</td>
																										<td>tr/2019/01/0004</td>
																										<td>warehouse 1</td>
																										<td>warehouse 2</td>
																										<td><div class="text-center"><span class="label label-success">completed</span></div></td>
																										<td class="text-right">0.00</td>
																									</tr>                                    
																								</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																			</div>
																			
																			<div id="customers" class="tab-pane fade in">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="table-responsive">
																							<table id="customers-tbl" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped" style="margin-bottom: 0;">
																								<thead>
																									<tr>
																											<th style="width:30px !important;">#</th>
																											<th>company</th>
																											<th>name</th>
																											<th>email</th>
																											<th>phone</th>
																											<th>address</th>
																									</tr>
																								</thead>
																								<tbody>
																									<tr id="13" class="customer_link pointer"><td>1</td>
																										<td>xyz</td>
																										<td>fsdfdsfdf</td>
																										<td></td>
																										<td>fsdfsdfsfsd</td>
																										<td>asfdsfasd</td>
																									</tr>
																								</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																			</div>

																			<div id="suppliers" class="tab-pane fade">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="table-responsive">
																							<table id="suppliers-tbl" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped" style="margin-bottom: 0;">
																								<thead>
																									<tr>
																											<th style="width:30px !important;">#</th>
																											<th>company</th>
																											<th>name</th>
																											<th>email</th>
																											<th>phone</th>
																											<th>address</th>
																									</tr>
																								</thead>
																								<tbody>
																									<tr id="11" class="supplier_link pointer"><td>1</td>
																										<td>samsung</td>
																										<td>va</td>
																										<td></td>
																										<td>1234679</td>
																										<td>pp</td>
																									</tr>                                           
																								</tbody>
																							</table>
																						</div>
																					</div>
																				</div>
																			</div>

																		</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="row hidden" style="margin-bottom: 15px;">
													<div class="col-sm-6">
															<div class="box">
																	<div class="box-header">
																			<h2 class="blue"><i class="fa-fw fa fa-line-chart"></i>best sellers (aug-2019)                    </h2>
																	</div>
																	<div class="box-content">
																			<div class="row">
																					<div class="col-md-12">
																							<div id="bschart" style="width:100%; height:450px;"></div>
																					</div>
																			</div>
																	</div>
															</div>
													</div>
													<div class="col-sm-6">
															<div class="box">
																	<div class="box-header">
																			<h2 class="blue"><i class="fa-fw fa fa-line-chart"></i>best sellers (jul-2019)                    </h2>
																	</div>
																	<div class="box-content">
																			<div class="row">
																					<div class="col-md-12">
																							<div id="lmbschart" style="width:100%; height:450px;"></div>
																					</div>
																			</div>
																	</div>
															</div>
													</div>
											</div>

											<div class="clearfix"></div>

										</div>
									</div>
								</div>
							</td>

						</tr>
					</table>
				</div>
		</div>

	</div>

	<script type="text/javascript" src="{{asset('sma/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('sma/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('sma/js/jquery.dataTables.dtFilter.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('sma/js/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('sma/js/jquery-ui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('sma/js/bootstrapValidator.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('sma/js/custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('sma/js/jquery.calculator.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('sma/js/core.js')}}"></script>
	<script type="text/javascript" src="{{asset('sma/js/perfect-scrollbar.min.js')}}"></script>


	{{-- <script src="{{asset("sma/js/purchases.js")}}"></script>
	<script src="{{asset("sma/js/transfers.js")}}"></script>
	<script src="{{asset("sma/js/sales.js")}}"></script>
	<script src="{{asset("sma/js/quotes.js")}}"></script>
	<script src="{{asset("sma/js/adjustments.js")}}"></script>
	<script src="{{asset("sma/js/using_stocks.js")}}"></script>
	<script src="{{asset("sma/js/scan_stocks.js")}}"></script>
	<script src="{{asset("sma/js/sale_orders.js")}}"></script>
  <script src="{{asset("sma/js/deliveries.js")}}"></script>
	<script src="{{asset("sma/js/purchase_orders.js")}}"></script>
	<script src="{{asset("sma/js/purchase_requests.js")}}"></script>
	<script src="{{asset("sma/js/converts.js")}}"></script>
	<script src="{{asset("sma/js/converts_to.js")}}"></script>
	<script src="{{asset("sma/js/boms.js")}}"></script>
	<script src="{{asset("sma/js/boms_to.js")}}"></script>
	<script src="{{asset("sma/js/cost_adjustments.js")}}"></script>
	<script src="{{asset("sma/js/enter_journal.js")}}"></script>
  <script src="{{asset("sma/js/receives.js")}}"></script> --}}

  <?php $m=''; $v='';?>
        @if ($m == 'purchases' && ($v == 'add' || $v == 'edit' || $v == 'purchase_by_csv'))
					<script src="{{asset("sma/js/purchases.js")}}"></script>
        @endif
        @if ($m == 'transfers' && ($v == 'add' || $v == 'edit'))
					<script src="{{asset("sma/js/transfers.js")}}"></script>
				@endif
				@if ($m == 'sales' && ($v == 'add' || $v == 'edit' || $v == 'edit_pos'))
					<script src="{{asset("sma/js/sales.js")}}"></script>
				@endif
				@if ($m == 'quotes' && ($v == 'add' || $v == 'edit'))
					<script src="{{asset("sma/js/quotes.js")}}"></script>
				@endif
				@if ($m == 'products' && ($v == 'add_adjustment' || $v == 'edit_adjustment'))
					<script src="{{asset("sma/js/adjustments.js")}}"></script>
				@endif
				@if ($m == 'products' && ($v == 'add_scan_stock' || $v == 'edit_scan_stock'))
					<script src="{{asset("sma/js/using_stocks.js")}}"></script>
				@endif
				@if ($m == 'products' && ($v == 'add_scan_stock' || $v == 'edit_scan_stock'))
          <script src="{{asset("sma/js/scan_stocks.js")}}"></script>
				@endif
				@if ($m == 'sale_orders' && ($v == 'add' || $v == 'edit'))
          <script src="{{asset("sma/js/sale_orders.js")}}"></script>
				@endif
				@if ($m == 'deliveries' && ($v == 'add' || $v == 'edit'))
          <script src="{{asset("sma/js/deliveries.js")}}"></script>
				@endif
				@if ($m == 'purchase_orders' && ($v == 'add' || $v == 'edit'))
          <script src="{{asset("sma/js/purchase_orders.js")}}"></script>
				@endif
				@if ($m == 'purchase_requests' && ($v == 'add' || $v == 'edit'))
          <script src="{{asset("sma/js/purchase_requests.js")}}"></script>
				@endif
				@if ($m == 'products' && ($v == 'add_convert' || $v == 'edit_convert'))
          <script src="{{asset("sma/js/converts.js")}}"></script>
				@endif
				@if ($m == 'products' && ($v == 'add_convert' || $v == 'edit_convert'))
          <script src="{{asset("sma/js/converts_to.js")}}"></script>
				@endif
				@if ($m == 'products' && ($v == 'add_bom' || $v == 'edit_bom'))
        	<script src="{{asset("sma/js/boms.js")}}"></script>
				@endif
				@if ($m == 'products' && ($v == 'add_bom' || $v == 'edit_bom'))
          <script src="{{asset("sma/js/boms_to.js")}}"></script>
				@endif
				@if ($m == 'products' && ($v == 'add_cost_adjustment' || $v == 'edit_cost_adjustment'))
          <script src="{{asset("sma/js/cost_adjustments.js")}}"></script>
        @endif
				@if ($m == 'accountings' && ($v == 'add_enter_journal' || $v == 'edit_enter_journal'))
	        <script src="{{asset("sma/js/enter_journal.js")}}"></script>
				@endif
				@if ($m == 'purchases' && ($v == 'add_receive' || $v == 'edit_receive'))
          <script src="{{asset("sma/js/receives.js")}}"></script> --}}
				@endif


	<script type="text/javascript" charset="UTF-8">
		var oTable = '', r_u_sure = "Are you sure";
			$(window).load(function () {
				$('.mm_<?=$m?>').addClass('active');
				$('.mm_<?=$m?>').find("ul").first().slideToggle();
				$('#<?=$m?>_<?=$v?>').addClass('active');
				$('.mm_<?=$m?> a .chevron').removeClass("closed").addClass("opened");
			});
	</script>

</body>
</html>
