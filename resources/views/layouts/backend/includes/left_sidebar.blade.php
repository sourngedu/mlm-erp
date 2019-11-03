<header class="sidebar-header">
	<div class="user-menu">
			<div class="row text-center mbn">
					<div class="col-xs-4">
							<a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="dashboard">
									<span class="glyphicons glyphicons-home"></span>
							</a>
					</div>
					<div class="col-xs-4">
							<a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="messages">
									<span class="glyphicons glyphicons-inbox"></span>
							</a>
					</div>
					<div class="col-xs-4">
							<a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="tasks">
									<span class="glyphicons glyphicons-bell"></span>
							</a>
					</div>
					<div class="col-xs-4">
							<a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="activity">
									<span class="glyphicons glyphicons-imac"></span>
							</a>
					</div>
					<div class="col-xs-4">
							<a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="settings">
									<span class="glyphicons glyphicons-settings"></span>
							</a>
					</div>
					<div class="col-xs-4">
							<a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="cron jobs">
									<span class="glyphicons glyphicons-restart"></span>
							</a>
					</div>
			</div>
	</div>
</header>
<!-- sidebar menu -->
{{-- <ul class="nav sidebar-menu">
	<li class="sidebar-label pt20">menu</li>
    <li class="active">
        <a href="dashboard.html">
            <span class="glyphicons glyphicons-home"></span>
            <span class="sidebar-title">dashboard</span>
        </a>
    </li>
    <li class="sidebar-label pt15">Settings</li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="glyphicons glyphicons-fire"></span>
            <span class="sidebar-title">Manage Roles</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('roles.create')}}">
                    <span class="glyphicons glyphicons-book"></span> Add Role </a>
            </li>
            <li>
                <a href="{{route('roles.index')}}">
                    <span class="glyphicons glyphicons-show_big_thumbnails"></span> Role List </a>
            </li>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="glyphicons glyphicons-cup"></span>
            <span class="sidebar-title">Manage Permission</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{route('permissions.create')}}">
                <span class="glyphicons glyphicons-edit"></span>Add Permission </a>
            </li>
            <li>
                <a href="{{route('permissions.index')}}">
                <span class="glyphicons glyphicons-calendar"></span> Permission List </a>
            </li>
        </ul>
    </li>
    <li>
            <a class="accordion-toggle" href="#">
                <span class="glyphicons glyphicons-cup"></span>
                <span class="sidebar-title">Manage User</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                    <li>
                            <a href="{{route('users.create')}}">
                                    <span class="glyphicons glyphicons-edit"></span> Add User</a>
                    </li>
                    <li>
                            <a href="{{route('users.index')}}">
                                    <span class="glyphicons glyphicons-calendar"></span>User List </a>
                    </li>
            </ul>
    </li>
    <li>
            <a class="accordion-toggle" href="#">
                    <span class="glyphicons glyphicons-cup"></span>
                    <span class="sidebar-title">Manage Post</span>
                    <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="{{route('posts.create')}}">
                    <span class="glyphicons glyphicons-edit"></span> Create Post </a>
                </li>
                <li>
                    <a href="{{route('posts.index')}}">
                    <span class="glyphicons glyphicons-calendar"></span> Post List </a>
                </li>
            </ul>
    </li>
</ul> --}}
{{-- <nav class="sidebar-nav">
    <ul class="metismenu">
        <li><span>Dashboard<span></li>
        <li>Account<span></li>
            <ul class="submenu">
                <li><span>Basics</span></li>
                <li><span>Picture</span></li>
                <li><span>Go Premium</span></li>
            </ul>
        <li><span>Messages</span><div class="messages">23</div></li>
            <ul class="submenu">
                <li><span>New</span></li>
                <li><span>Sent</span></li>
                <li><span>Trash</span></li>
            </ul>
        <li><span>Settings</span></li>
            <ul class="submenu">
                <li><span>Language</span></li>
                <li><span>Password</span></li>
                <li><span>Notifications</span></li>
                <li><span>Privacy</span></li>
                <li><span>Payments</span></li>
            </ul>
        <li><span>Logout</span></li>
    </ul>
</nav> --}}

        <nav class="sidebar-nav">
          <ul class="metismenu" id="menu1">
            <li>
              <a class="has-arrow" href="#">
                <span class="fa fa-fw fa-github fa-lg"></span>
                Dashoard
              </a>
              <ul>
                <li>
                  <a href="https://github.com/onokumus/metisMenu">
                    <span class="fa fa-fw fa-code-fork"></span> Fork
                  </a>
                </li>
                <li>
                  <a href="https://github.com/onokumus/metisMenu">
                    <span class="fa fa-fw fa-star"></span> Star
                  </a>
                </li>
                <li>
                  <a href="https://github.com/onokumus/metisMenu/issues">
                    <span class="fa fa-fw fa-exclamation-triangle"></span> Issues
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="#" aria-expanded="false">Menu 0</a>
              <ul>
                <li><a href="#">item 0.1</a></li>
                <li><a href="#">item 0.2</a></li>
                <li><a href="#">item 0.4</a></li>
              </ul>
            </li>
            <li id="removable">
              <a class="has-arrow" href="#" aria-expanded="false">Menu 1</a>
              <ul>
                <li><a href="#">item 1.1</a></li>
                <li><a href="#">item 1.2</a></li>
                <li>
                  <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                  <ul>
                    <li><a href="#">item 1.3.1</a></li>
                    <li><a href="#">item 1.3.2</a></li>
                    <li><a href="#">item 1.3.3</a></li>
                    <li><a href="#">item 1.3.4</a></li>
                  </ul>
                </li>
                <li><a href="#">item 1.4</a></li>
                <li>
                  <a class="has-arrow" href="#" aria-expanded="false">Menu 1.5</a>
                  <ul>
                    <li><a href="#">item 1.5.1</a></li>
                    <li><a href="#">item 1.5.2</a></li>
                    <li><a href="#">item 1.5.3</a></li>
                    <li><a href="#">item 1.5.4</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
<div class="sidebar-toggle-mini">
  <a href="#">
      <span class="fa fa-sign-out"></span>
  </a>
</div>
