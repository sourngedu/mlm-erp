<div class="navbar-branding bg-danger">
		<a class="navbar-brand" href="dashboard.html"> <b>admin</b>designs </a>
		<span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
		<ul class="nav navbar-nav pull-right hidden">
				<li>
						<a href="#" class="sidebar-menu-toggle">
								<span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
						</a>
				</li>
		</ul>
</div>
<ul class="nav navbar-nav navbar-left">
		<li>
				<a class="sidebar-menu-toggle" href="#">
						<span class="octicon octicon-ruby fs18"></span>
				</a>
		</li>
		<li>
				<a class="topbar-menu-toggle" href="#">
						<span class="glyphicons glyphicons-magic fs16"></span>
				</a>
		</li>
		<li>
				<span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>
		</li>
		<li class="dropdown hidden">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicons glyphicons-settings fs14"></span>
				</a>
				<ul class="dropdown-menu" role="menu">
						<li>
								<a href="javascript:void(0);">
										<span class="fa fa-times-circle-o pr5 text-primary"></span> reset localstorage </a>
						</li>
						<li>
								<a href="javascript:void(0);">
										<span class="fa fa-slideshare pr5 text-info"></span> force global logout </a>
						</li>
						<li class="divider mv5"></li>
						<li>
								<a href="javascript:void(0);">
										<span class="fa fa-tasks pr5 text-danger"></span> run cron job </a>
						</li>
						<li>
								<a href="javascript:void(0);">
										<span class="fa fa-wrench pr5 text-warning"></span> maintenance mode </a>
						</li>
				</ul>
		</li>
		<li class="hidden-xs">
				<a class="request-fullscreen toggle-active" href="#">
						<span class="octicon octicon-screen-full fs18"></span>
				</a>
		</li>
</ul>
<form class="navbar-form navbar-left navbar-search ml5" role="search">
		<div class="form-group">
				<input type="text" class="form-control" placeholder="search..." value="search...">
		</div>
</form>
<ul class="nav navbar-nav navbar-right">
		<li class="dropdown dropdown-item-slide">
				<a class="dropdown-toggle pl10 pr10" data-toggle="dropdown" href="#">
						<span class="octicon octicon-radio-tower fs18"></span>
				</a>
				<ul class="dropdown-menu dropdown-hover dropdown-persist pn w350 bg-white animated animated-shorter fadein" role="menu">
						<li class="bg-light p8">
								<span class="fw600 pl5 lh30"> notifications</span>
								<span class="label label-warning label-sm pull-right lh20 h-20 mt5 mr5">12</span>
						</li>
						<li class="p10 br-t item-1">
								<div class="media">
										<a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="holder-img"> </a>
										<div class="media-body va-m">
												<h5 class="media-heading mv5">article <small class="text-muted">- 08/16/22</small> </h5> last updated 36 days ago by
												<a class="text-system" href="#"> max </a>
										</div>
								</div>
						</li>
						<li class="p10 br-t item-2">
								<div class="media">
										<a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="holder-img"> </a>
										<div class="media-body va-m">
												<h5 class="media-heading mv5">article <small class="text-muted">- 08/16/22</small> </h5> last updated 36 days ago by
												<a class="text-system" href="#"> max </a>
										</div>
								</div>
						</li>
						<li class="p10 br-t item-3">
								<div class="media">
										<a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="holder-img"> </a>
										<div class="media-body va-m">
												<h5 class="media-heading mv5">article <small class="text-muted">- 08/16/22</small> </h5> last updated 36 days ago by
												<a class="text-system" href="#"> max </a>
										</div>
								</div>
						</li>
						<li class="p10 br-t item-4">
								<div class="media">
										<a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="holder-img"> </a>
										<div class="media-body va-m">
												<h5 class="media-heading mv5">article <small class="text-muted">- 08/16/22</small> </h5> last updated 36 days ago by
												<a class="text-system" href="#"> max </a>
										</div>
								</div>
						</li>
				</ul>
		</li>
		<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="flag-xs flag-us"></span>
						<span class="fw600">us</span>
				</a>
				<ul class="dropdown-menu animated animated-short flipinx" role="menu">
						<li>
								<a href="javascript:void(0);" class="fw600">
										<span class="flag-xs flag-in mr10"></span> hindu </a>
						</li>
						<li>
								<a href="javascript:void(0);" class="fw600">
										<span class="flag-xs flag-tr mr10"></span> turkish </a>
						</li>
						<li>
								<a href="javascript:void(0);" class="fw600">
										<span class="flag-xs flag-es mr10"></span> spanish </a>
						</li>
				</ul>
		</li>
		<li class="ph10 pv20 hidden-xs"> <i class="fa fa-circle text-tp fs8"></i>
		</li>
		<li class="dropdown">
				<a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15">
						<span>john.smith</span>
						<span class="caret caret-tp hidden-xs"></span>
				</a>
				<ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
						<li class="bg-light br-b br-light p8">
								<span class="pull-left ml10">
										<select id="user-status">
												<optgroup label="current status:">
														<option value="1-1">away</option>
														<option value="1-2">offline</option>
														<option value="1-3" selected="selected">online</option>
												</optgroup>
										</select>
								</span>

								<span class="pull-right mr10">
										<select id="user-role">
												<optgroup label="logged in as:">
														<option value="1-1">client</option>
														<option value="1-2">editor</option>
														<option value="1-3" selected="selected">admin</option>
												</optgroup>
										</select>
								</span>
								<div class="clearfix"></div>

						</li>
						<li class="of-h">
								<a href="#" class="fw600 p12 animated animated-short fadeinup">
										<span class="fa fa-envelope pr5"></span> messages
										<span class="pull-right lh20 h-20 label label-warning label-sm">2</span>
								</a>
						</li>
						<li class="br-t of-h">
								<a href="#" class="fw600 p12 animated animated-short fadeinup">
										<span class="fa fa-user pr5"></span> friends
										<span class="pull-right lh20 h-20 label label-warning label-sm">6</span>
								</a>
						</li>
						<li class="br-t of-h">
								<a href="#" class="fw600 p12 animated animated-short fadeindown">
										<span class="fa fa-gear pr5"></span> account settings </a>
						</li>
						<li class="br-t of-h">
								<a href="{{ route('logout') }}" class="fw600 p12 animated animated-short fadeindown"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										<span class="fa fa-power-off pr5"></span> logout </a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
										</form>										
						</li>
				</ul>
		</li>
</ul>