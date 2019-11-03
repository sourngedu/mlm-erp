<div class="navbar-container ace-save-state" id="navbar-container">
  <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
    <span class="sr-only">Toggle sidebar</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <div class="navbar-header pull-left">
    <a href="index.html" class="navbar-brand">
      <small>
        <i class="fa fa-leaf"></i>
        SourngEdu Admin
      </small>
    </a>
  </div>

  {{-- <div class="navbar-buttons navbar-header pull-right" role="navigation">
    <ul class="nav ace-nav">
      <li class="grey dropdown-modal">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <i class="ace-icon fa fa-tasks"></i>
          <span class="badge badge-grey">4</span>
        </a>

        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
          <li class="dropdown-header">
            <i class="ace-icon fa fa-check"></i>
            4 Tasks to complete
          </li>

          <li class="dropdown-content">
            <ul class="dropdown-menu dropdown-navbar">
              <li>
                <a href="#">
                  <div class="clearfix">
                    <span class="pull-left">Software Update</span>
                    <span class="pull-right">65%</span>
                  </div>

                  <div class="progress progress-mini">
                    <div style="width:65%" class="progress-bar"></div>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="clearfix">
                    <span class="pull-left">Hardware Upgrade</span>
                    <span class="pull-right">35%</span>
                  </div>

                  <div class="progress progress-mini">
                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="clearfix">
                    <span class="pull-left">Unit Testing</span>
                    <span class="pull-right">15%</span>
                  </div>

                  <div class="progress progress-mini">
                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="clearfix">
                    <span class="pull-left">Bug Fixes</span>
                    <span class="pull-right">90%</span>
                  </div>

                  <div class="progress progress-mini progress-striped active">
                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                  </div>
                </a>
              </li>
            </ul>
          </li>

          <li class="dropdown-footer">
            <a href="#">
              See tasks with details
              <i class="ace-icon fa fa-arrow-right"></i>
            </a>
          </li>
        </ul>
      </li>

      <li class="purple dropdown-modal">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <i class="ace-icon fa fa-bell icon-animated-bell"></i>
          <span class="badge badge-important">8</span>
        </a>

        <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
          <li class="dropdown-header">
            <i class="ace-icon fa fa-exclamation-triangle"></i>
            8 Notifications
          </li>

          <li class="dropdown-content">
            <ul class="dropdown-menu dropdown-navbar navbar-pink">
              <li>
                <a href="#">
                  <div class="clearfix">
                    <span class="pull-left">
                      <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                      New Comments
                    </span>
                    <span class="pull-right badge badge-info">+12</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <i class="btn btn-xs btn-primary fa fa-user"></i>
                  Bob just signed up as an editor ...
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="clearfix">
                    <span class="pull-left">
                      <i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
                      New Orders
                    </span>
                    <span class="pull-right badge badge-success">+8</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="#">
                  <div class="clearfix">
                    <span class="pull-left">
                      <i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
                      Followers
                    </span>
                    <span class="pull-right badge badge-info">+11</span>
                  </div>
                </a>
              </li>
            </ul>
          </li>

          <li class="dropdown-footer">
            <a href="#">
              See all notifications
              <i class="ace-icon fa fa-arrow-right"></i>
            </a>
          </li>
        </ul>
      </li>

      <li class="green dropdown-modal">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
          <span class="badge badge-success">5</span>
        </a>

        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
          <li class="dropdown-header">
            <i class="ace-icon fa fa-envelope-o"></i>
            5 Messages
          </li>

          <li class="dropdown-content">
            <ul class="dropdown-menu dropdown-navbar">
              <li>
                <a href="#" class="clearfix">
                  <img src="{{ asset('ace/images/avatars/avatar.png')}}" class="msg-photo" alt="Alex's Avatar" />
                  <span class="msg-body">
                    <span class="msg-title">
                      <span class="blue">Alex:</span>
                      Ciao sociis natoque penatibus et auctor ...
                    </span>

                    <span class="msg-time">
                      <i class="ace-icon fa fa-clock-o"></i>
                      <span>a moment ago</span>
                    </span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#" class="clearfix">
                  <img src="{{ asset('ace/images/avatars/avatar3.png')}}" class="msg-photo" alt="Susan's Avatar" />
                  <span class="msg-body">
                    <span class="msg-title">
                      <span class="blue">Susan:</span>
                      Vestibulum id ligula porta felis euismod ...
                    </span>

                    <span class="msg-time">
                      <i class="ace-icon fa fa-clock-o"></i>
                      <span>20 minutes ago</span>
                    </span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#" class="clearfix">
                  <img src="{{ asset('ace/images/avatars/avatar4.png')}}" class="msg-photo" alt="Bob's Avatar" />
                  <span class="msg-body">
                    <span class="msg-title">
                      <span class="blue">Bob:</span>
                      Nullam quis risus eget urna mollis ornare ...
                    </span>

                    <span class="msg-time">
                      <i class="ace-icon fa fa-clock-o"></i>
                      <span>3:15 pm</span>
                    </span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#" class="clearfix">
                  <img src="{{ asset('ace/images/avatars/avatar2.png')}}" class="msg-photo" alt="Kate's Avatar" />
                  <span class="msg-body">
                    <span class="msg-title">
                      <span class="blue">Kate:</span>
                      Ciao sociis natoque eget urna mollis ornare ...
                    </span>

                    <span class="msg-time">
                      <i class="ace-icon fa fa-clock-o"></i>
                      <span>1:33 pm</span>
                    </span>
                  </span>
                </a>
              </li>

              <li>
                <a href="#" class="clearfix">
                  <img src="{{ asset('ace/images/avatars/avatar5.png')}}" class="msg-photo" alt="Fred's Avatar" />
                  <span class="msg-body">
                    <span class="msg-title">
                      <span class="blue">Fred:</span>
                      Vestibulum id penatibus et auctor  ...
                    </span>

                    <span class="msg-time">
                      <i class="ace-icon fa fa-clock-o"></i>
                      <span>10:09 am</span>
                    </span>
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="dropdown-footer">
            <a href="inbox.html">
              See all messages
              <i class="ace-icon fa fa-arrow-right"></i>
            </a>
          </li>
        </ul>
      </li>

      <li class="light-blue dropdown-modal">
        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
          <img class="nav-user-photo" src="{{ asset('ace/images/avatars/user.jpg')}}" alt="Jason's Photo" />
          <span class="user-info">
            <small>Welcome,</small>
            Jason
          </span>

          <i class="ace-icon fa fa-caret-down"></i>
        </a>

        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
          <li>
            <a href="#">
              <i class="ace-icon fa fa-cog"></i>
              Settings
            </a>
          </li>

          <li>
            <a href="profile.html">
              <i class="ace-icon fa fa-user"></i>
              Profile
            </a>
          </li>

          <li class="divider"></li>

          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
              <i class="ace-icon fa fa-power-off"></i>
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>	
          </li>
        </ul>
      </li>
    </ul>
  </div> --}}

    <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
        <ul class="nav ace-nav">
            <li class="light-blue dropdown-modal user-min">
                <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                    <img class="nav-user-photo" src="{{ asset('images/user/'.auth()->user()->profile_image) }}" alt="Jason's Photo" />
                    <span class="user-info">
							<small>Welcome,</small>
							{{isset(auth()->user()->name)?auth()->user()->name:""}}
						</span>

                    <i class="ace-icon fa fa-caret-down"></i>
                </a>

                <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                    <li>
                        <a href="{{--{{ route('user.edit', ['id' => Crypt::encryptString(auth()->user()->id)]) }}--}}">
                            <i class="ace-icon fa fa-user"></i>
                            Profile
                        </a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ace-icon fa fa-power-off"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    {{-- @ability('super-admin','expand-action-menu')
    <div class="navbar-buttons navbar-header pull-left  collapse navbar-collapse" role="navigation">
        <div class="collapse navbar-collapse js-navbar-collapse col-md-12">
            <ul class="nav navbar-nav navbar-nav-mega col-md-12">
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-expand"></span>&nbsp;&nbsp;Expand Actions</a>
                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header"><i class="fa fa-users" aria-hidden="true"></i> Student</li>
                                <li><a href="{{ route('student') }}">Detail</a></li>
                                <li><a href="{{ route('student.registration') }}">Registration</a></li>
                                <li><a href="{{ route('student.transfer') }}">Transfer</a></li>
                                <li><a href="{{ route('student.document') }}">Documents</a></li>
                                <li><a href="{{ route('student.note') }}">Notes</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header"><i class="fa fa-user-secret" aria-hidden="true"></i> Staff</li>
                                <li><a href="{{ route('staff') }}">Detail</a></li>
                                <li><a href="{{ route('staff.add') }}">Registration</a></li>
                                <li><a href="{{ route('staff.document') }}">Documents</a></li>
                                <li><a href="{{ route('staff.note') }}">Notes</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Attendance</li>
                                <li><a href="{{ route('attendance.student') }}">Student</a></li>
                                <li><a href="{{ route('attendance.staff') }}">Staff</a></li>

                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header"><i class="fa fa-calculator" aria-hidden="true"></i> Account</li>
                                <li><a href="{{ route('account.fees.master.add') }}">Add Fees</a></li>
                                <li><a href="{{ route('account.fees.collection') }}">Collect Fees</a></li>
                                <li><a href="{{ route('account.fees.balance') }}">Balance Fees</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('account.payroll.master.add') }}">Add Salary</a></li>
                                <li><a href="{{ route('account.salary.payment') }}">Pay Salary</a></li>
                                <li><a href="{{ route('account.payroll.balance') }}">Balance Salary</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header"><i class="fa fa-book" aria-hidden="true"></i> Library</li>
                                <li><a href="{{ route('library.book') }}">Books Detail</a></li>
                                <li><a href="{{ route('library.student') }}">Student Member</a></li>
                                <li><a href="{{ route('library.staff') }}">Staff Member</a></li>
                                <li><a href="{{ route('library.issue-history') }}">Issue History</a></li>
                                <li><a href="{{ route('library.return-over') }}">Return Period Over</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header"><i class="fa fa-certificate" aria-hidden="true"></i> Examination</li>
                                <li><a href="{{ route('exam.schedule') }}">Exam Schedule </a></li>
                                <li><a href="{{ route('exam.mark-ledger') }}">Mark Ledger</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('exam.admit-card') }}">Admit Card</a></li>
                                <li><a href="{{ route('exam.routine') }}">Routine</a></li>
                                <li><a href="{{ route('exam.mark-sheet') }}">MarkSheet/Score</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header"><i class="fa fa-car" aria-hidden="true"></i> Transport</li>
                                <li><a href="{{ route('transport.user.history') }}">User Hstory</a></li>
                                <li><a href="{{ route('transport.user') }}">Traveller/User</a></li>
                                <li><a href="{{ route('transport.route') }}">Route</a></li>
                                <li><a href="{{ route('transport.vehicle') }}">Vehicle</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header"><i class="fa fa-bed" aria-hidden="true"></i> Hostel</li>
                                <li><a href="{{ route('hostel.resident') }}">Resident</a></li>
                                <li><a href="{{ route('hostel.resident.history') }}">Resident History</a></li>
                                <li><a href="{{ route('hostel') }}">Hostel Detail</a></li>
                                <li><a href="{{ route('hostel.food') }}">Food & Meal</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header"><i class="fa fa-bullhorn" aria-hidden="true"></i> Alert</li>
                                <li><a href="{{ route('info.notice') }}">User Notice</a></li>
                                <li><a href="{{ route('info.smsemail') }}">Send SMS/Email</a></li>
                                <li><a href="{{ route('setting.alert') }}">Alert Templating</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header"><i class="fa fa-th-list" aria-hidden="true"></i> More</li>
                                <li><a href="{{ route('info.notice') }}">Assignment</a></li>
                                <li><a href="{{ route('info.smsemail') }}">Upload/Download</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>

        </div>
    </div>
    @endability --}}
    <nav role="navigation" class="navbar-menu pull-right collapse navbar-collapse">
        <ul class="nav navbar-nav">
            @role('Super-Admin')
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Admin Control
                        &nbsp;
                        <i class="ace-icon fa fa-angle-down bigger-110"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                        <li>
                            <a href="{{ route('admin.users.index') }}">
                                <i class="ace-icon fa fa-user bigger-110 blue"></i>
                                Users & Roles
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.settings.index') }}">
                                <i class="ace-icon fa fa-cogs bigger-110 blue"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.languages') }}" accesskey="L" target="blank">
                                <i class="menu-icon fa fa-language" aria-hidden="true"></i>
                                @lang('Language Translations')
                            </a>
                        </li>

                    </ul>
                </li>
            @endrole
        </ul>
    </nav>
    {{-- flag languages --}}
    <nav role="navigation" class="navbar-menu pull-right collapse navbar-collapse">
      <ul class="nav navbar-nav">
        {{-- @ability('super-admin', 'admin-control') --}}
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php  $flag = app()->getLocale(); ?>
              <img src="{{asset('images/flags/'.$flag.'.png')}}" class="img-flag" alt="" width="32" height="18">
              &nbsp;{{ strtoupper($flag) }}
            </a>

            <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
              <li>
                <a href="{{ url('locale') }}/en">
                  <img src="{{asset('images/flags/en.png')}}" class="img-flag" alt="" width="32" height="18">
                  English
                </a>
              </li>
              <li>
                <a href="{{ url('locale') }}/kh">
                  <img src="{{asset('images/flags/kh.png')}}" class="img-flag" alt="" width="32" height="18">
                  Khmer
                </a>
              </li>
            {{--<li>
                <a href="{{ url('locale') }}/th">
                  <img src="{{asset('images/flags/th.png')}}" class="img-flag" alt="" width="32" height="18">
                  Thai
                </a>
              </li>
              <li>
                <a href="{{ url('locale') }}/fr">
                  <img src="{{asset('images/flags/fr.png')}}" class="img-flag" alt="" width="32" height="18">
                  French
                </a>
              </li>
              <li>
                <a href="{{ url('locale') }}/de">
                  <img src="{{asset('images/flags/de.png')}}" class="img-flag" alt="" width="32" height="18">
                  German
                </a>
              </li> --}}
            </ul>
          </li>
        {{-- @endability --}}
      </ul>
    </nav>  
</div><!-- /.navbar-container -->