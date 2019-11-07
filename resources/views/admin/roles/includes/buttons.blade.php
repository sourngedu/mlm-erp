{{-- <div class="clearfix hidden-print ">
	<div class="easy-link-menu align-left">
		<a class="{!! request()->is('admin/roles')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('admin.roles.index') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detail</a>
		<a style="margin-right: 0px;" class="{!! request()->is('admin/roles/create')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('admin.roles.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Create Role</a>
		<a style="margin-right: 3px;" class="{!! request()->is('admin/permissions*')?'btn-success':'btn-primary' !!} btn-sm pull-right" href="{{ route('admin.permissions.index') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp; Permission</a>
		<a style="margin-right: 3px;" class="{!! request()->is('admin/user*')?'btn-success':'btn-primary' !!} btn-sm pull-right" href="{{ route('admin.roles.index') }}"><i class="fa fa-list" aria-hidden="true"></i> User</a>
	</div>
</div>
<hr class="hr-6"> --}}

<div class="clearfix hidden-print ">
        <div class="btn-group pull-left">
            @if (Request::segment(3)=='')
                <span class="header large lighter blue" style="font-size:20px;"> {{ucfirst(Request::segment(2))}} List</span>
            @endif

            @if (Request::segment(3)!='')
            <span class="header large lighter blue" style="font-size:20px;"> {{ucfirst(Request::segment(3))}} {{Request::segment(3)==''?'':ucfirst(Request::segment(2))}}</span>
            @endif
        </div>
        <div class="btn-group pull-right">
            <button data-toggle="dropdown" class="btn btn-info btn-sm dropdown-toggle" aria-expanded="false">
                <i class="fa fa-list" aria-hidden="true"></i> Options
                <span class="ace-icon fa fa-caret-down icon-on-right"></span>
            </button>
            <ul class="dropdown-menu dropdown-info dropdown-menu-right">
                <li>
                    <a  href="{{ route('admin.roles.index') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;{{ucfirst(Request::segment(2))}} List</a>
                </li>

                <li>
                    <a  href="{{ route('admin.roles.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Create</a>
                </li>
                <li class="divider"></li>
                    <li>
                        <a href="{{ route('admin.permissions.index') }}"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Permission</a>
                    </li>

                    <li>
                        <a href="{{ route('admin.roles.index') }}"><i class="fa fa-certificate" aria-hidden="true"></i> Role Accessibility</a>
                    </li>
            </ul>
        </div>

</div>
<hr class="hr-6">
