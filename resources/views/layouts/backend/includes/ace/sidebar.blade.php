<li class="{!!request()->is('/')?'active':''!!}">
  <a href="/">
    <i class="menu-icon fa fa-tachometer"></i>
    <span class="menu-text"> Dashboard </span>
  </a>
  <b class="arrow"></b>
</li>

<li class="{!! request()->is('admin/roles*')?'active open':'' !!}">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-list"></i>
    <span class="menu-text"> Manage Roles </span>
    <b class="arrow fa fa-angle-down"></b>
  </a>
  <b class="arrow"></b>
  <ul class="submenu">
    <li class="{!! request()->is('admin/roles/create')?'active open':'' !!}">
      <a href="{{ route('admin.roles.create') }}">
        <i class="menu-icon fa fa-plus"></i>
        Add Role
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{!! request()->is('admin/roles')?'active open':'' !!}">
      <a href="{{ route('admin.roles.index') }}">
        <i class="menu-icon fa fa-eye"></i>
        Roles List
      </a>
      <b class="arrow"></b>
    </li>
  </ul>
</li>

<li class="{!! request()->is('admin/permissions*')?'active open':'' !!}">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-list"></i>
    <span class="menu-text"> Manage Permissions </span>
    <b class="arrow fa fa-angle-down"></b>
  </a>
  <b class="arrow"></b>
  <ul class="submenu">
    <li class="{!! request()->is('admin/permissions/create')?'active open':'' !!}">
      <a href="{{ route('admin.permissions.create') }}">
        <i class="menu-icon fa fa-plus"></i>
        Add Permission
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{!! request()->is('admin/permissions')?'active open':'' !!}">
      <a href="{{ route('admin.permissions.index') }}">
        <i class="menu-icon fa fa-eye"></i>
        Permissions List
      </a>
      <b class="arrow"></b>
    </li>
  </ul>
</li>

<li class="{!! request()->is('admin/users*')?'active open':'' !!}">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-list"></i>
    <span class="menu-text"> Manage Users </span>
    <b class="arrow fa fa-angle-down"></b>
  </a>
  <b class="arrow"></b>
  <ul class="submenu">
    <li class="{!! request()->is('admin/users/create')?'active open':'' !!}">
      <a href="{{ route('admin.users.create') }}">
        <i class="menu-icon fa fa-plus"></i>
        Add User
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{!! request()->is('admin/users')?'active open':'' !!}">
      <a href="{{ route('admin.users.index') }}">
        <i class="menu-icon fa fa-eye"></i>
        Users List
      </a>
      <b class="arrow"></b>
    </li>
  </ul>
</li>

<li class="{!! request()->is('admin/posts*')?'active open':'' !!}">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-list"></i>
    <span class="menu-text"> Manage Posts </span>
    <b class="arrow fa fa-angle-down"></b>
  </a>
  <b class="arrow"></b>
  <ul class="submenu">
    <li class="{!! request()->is('admin/posts/create')?'active open':'' !!}">
      <a href="{{ route('admin.posts.create') }}">
       <i class="menu-icon fa fa-plus"></i>
        Add Post
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{!! request()->is('admin/posts')?'active open':'' !!}">
      <a href="{{ route('admin.posts.index') }}">
        <i class="menu-icon fa fa-eye"></i>
        Posts List
      </a>
      <b class="arrow"></b>
    </li>
  </ul>
</li>

<li class="{!! request()->is('admin/products*')?'active open':'' !!}">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-list"></i>
    <span class="menu-text"> Manage Products </span>
    <b class="arrow fa fa-angle-down"></b>
  </a>
  <b class="arrow"></b>
  <ul class="submenu">
    <li class="{!! request()->is('admin/products/create')?'active open':'' !!}">
      <a href="{{ route('admin.products.create') }}">
       <i class="menu-icon fa fa-plus"></i>
        Add Product
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{!! request()->is('admin/products')?'active open':'' !!}">
      <a href="{{ route('admin.products.index') }}">
        <i class="menu-icon fa fa-eye"></i>
        Product List
      </a>
      <b class="arrow"></b>
    </li>
  </ul>
</li>

<li class="{!!request()->is('admin/activitylogs*')?'active open':''!!}">
  <a href="{{route('admin.activitylogs.index')}}">
    <i class="menu-icon fa fa-tachometer"></i>
    <span class="menu-text"> ActivityLogs </span>
  </a>
  <b class="arrow"></b>
</li>

<li class="{!! request()->is('admin/settings*')?'active open':'' !!}">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-list"></i>
    <span class="menu-text"> Manage Settings </span>
    <b class="arrow fa fa-angle-down"></b>
  </a>
  <b class="arrow"></b>
  <ul class="submenu">
    <li class="{!! request()->is('admin/settings/create')?'active open':'' !!}">
      <a href="{{ route('admin.settings.create') }}">
       <i class="menu-icon fa fa-plus"></i>
        Add Setting
      </a>
      <b class="arrow"></b>
    </li>
    <li class="{!! request()->is('admin/settings')?'active open':'' !!}">
      <a href="{{ route('admin.settings.index') }}">
        <i class="menu-icon fa fa-eye"></i>
        Settings List
      </a>
      <b class="arrow"></b>
    </li>
  </ul>
</li>

<li class="">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-desktop"></i>
    <span class="menu-text">
      Menu &amp; UI
    </span>

    <b class="arrow fa fa-angle-down"></b>
  </a>

  <b class="arrow"></b>

  <ul class="submenu">
    <li class="">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-caret-right"></i>
        Layouts
        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <li class="">
          <a href="top-menu.html">
            <i class="menu-icon fa fa-caret-right"></i>
            Top Menu
          </a>

          <b class="arrow"></b>
        </li>

        <li class="">
          <a href="two-menu-1.html">
            <i class="menu-icon fa fa-caret-right"></i>
            Two Menus 1
          </a>

          <b class="arrow"></b>
        </li>

        <li class="">
          <a href="two-menu-2.html">
            <i class="menu-icon fa fa-caret-right"></i>
            Two Menus 2
          </a>

          <b class="arrow"></b>
        </li>

        <li class="">
          <a href="mobile-menu-1.html">
            <i class="menu-icon fa fa-caret-right"></i>
            Default Mobile Menu
          </a>

          <b class="arrow"></b>
        </li>

        <li class="">
          <a href="mobile-menu-2.html">
            <i class="menu-icon fa fa-caret-right"></i>
            Mobile Menu 2
          </a>

          <b class="arrow"></b>
        </li>

        <li class="">
          <a href="mobile-menu-3.html">
            <i class="menu-icon fa fa-caret-right"></i>
            Mobile Menu 3
          </a>

          <b class="arrow"></b>
        </li>
      </ul>
    </li>

    <li class="">
      <a href="typography.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Typography
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="elements.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Elements
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="buttons.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Buttons &amp; Icons
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="content-slider.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Content Sliders
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="treeview.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Treeview
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="jquery-ui.html">
        <i class="menu-icon fa fa-caret-right"></i>
        jQuery UI
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="nestable-list.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Nestable Lists
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-caret-right"></i>

        Three Level Menu
        <b class="arrow fa fa-angle-down"></b>
      </a>

      <b class="arrow"></b>

      <ul class="submenu">
        <li class="">
          <a href="#">
            <i class="menu-icon fa fa-leaf green"></i>
            Item #1
          </a>

          <b class="arrow"></b>
        </li>

        <li class="">
          <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil orange"></i>

            4th level
            <b class="arrow fa fa-angle-down"></b>
          </a>

          <b class="arrow"></b>

          <ul class="submenu">
            <li class="">
              <a href="#">
                <i class="menu-icon fa fa-plus purple"></i>
                Add Product
              </a>
              <b class="arrow"></b>
            </li>
            <li class="">
              <a href="#">
                <i class="menu-icon fa fa-eye pink"></i>
                View Products
              </a>
              <b class="arrow"></b>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</li>

{{-- <li class="">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-list"></i>
    <span class="menu-text"> Tables </span>
    <b class="arrow fa fa-angle-down"></b>
  </a>
  <b class="arrow"></b>
  <ul class="submenu">
    <li class="">
      <a href="tables.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Simple &amp; Dynamic
      </a>
      <b class="arrow"></b>
    </li>
    <li class="">
      <a href="jqgrid.html">
        <i class="menu-icon fa fa-caret-right"></i>
        jqGrid plugin
      </a>
      <b class="arrow"></b>
    </li>
  </ul>
</li>

<li class="">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-pencil-square-o"></i>
    <span class="menu-text"> Forms </span>

    <b class="arrow fa fa-angle-down"></b>
  </a>

  <b class="arrow"></b>

  <ul class="submenu">
    <li class="">
      <a href="form-elements.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Form Elements
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="form-elements-2.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Form Elements 2
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="form-wizard.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Wizard &amp; Validation
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="wysiwyg.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Wysiwyg &amp; Markdown
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="dropzone.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Dropzone File Upload
      </a>

      <b class="arrow"></b>
    </li>
  </ul>
</li>

<li class="">
  <a href="widgets.html">
    <i class="menu-icon fa fa-list-alt"></i>
    <span class="menu-text"> Widgets </span>
  </a>

  <b class="arrow"></b>
</li>

<li class="">
  <a href="calendar.html">
    <i class="menu-icon fa fa-calendar"></i>

    <span class="menu-text">
      Calendar

      <span class="badge badge-transparent tooltip-error" title="2 Important Events">
        <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
      </span>
    </span>
  </a>

  <b class="arrow"></b>
</li>

<li class="">
  <a href="gallery.html">
    <i class="menu-icon fa fa-picture-o"></i>
    <span class="menu-text"> Gallery </span>
  </a>

  <b class="arrow"></b>
</li>

<li class="">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-tag"></i>
    <span class="menu-text"> More Pages </span>

    <b class="arrow fa fa-angle-down"></b>
  </a>

  <b class="arrow"></b>

  <ul class="submenu">
    <li class="">
      <a href="profile.html">
        <i class="menu-icon fa fa-caret-right"></i>
        User Profile
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="inbox.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Inbox
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="pricing.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Pricing Tables
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="invoice.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Invoice
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="timeline.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Timeline
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="search.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Search Results
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="email.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Email Templates
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="login.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Login &amp; Register
      </a>

      <b class="arrow"></b>
    </li>
  </ul>
</li>

<li class="">
  <a href="#" class="dropdown-toggle">
    <i class="menu-icon fa fa-file-o"></i>

    <span class="menu-text">
      Other Pages

      <span class="badge badge-primary">5</span>
    </span>

    <b class="arrow fa fa-angle-down"></b>
  </a>

  <b class="arrow"></b>

  <ul class="submenu">
    <li class="">
      <a href="faq.html">
        <i class="menu-icon fa fa-caret-right"></i>
        FAQ
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="error-404.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Error 404
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="error-500.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Error 500
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="grid.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Grid
      </a>

      <b class="arrow"></b>
    </li>

    <li class="">
      <a href="blank.html">
        <i class="menu-icon fa fa-caret-right"></i>
        Blank Page
      </a>

      <b class="arrow"></b>
    </li>
  </ul>
</li> --}}