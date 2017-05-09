<header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>DB</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ __('Admin') }}</b>{!! __('Dashboard') !!}</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ __('Toggle navigation') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{!! url('') !!}" target="_blank">{{ __('Go Home Page') }}</a>
                </li>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if (Auth::user()->avatar)
                            <img src="{!! Storage::url(Auth::user()->avatar) !!}" class="user-image" alt="User Image">
                        @else
                            <img src="{!! url('bower_components/asset-admin-lte/admin/dist/img/avatar.png') !!}" class="user-image" alt="User Image">
                        @endif
                        <span class="hidden-xs">{!! Auth::user()->display_name !!}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            @if (Auth::user()->avatar)
                                <img src="{!! Storage::url(Auth::user()->avatar); !!}" class="user-image" alt="User Image">
                            @else
                                <img src="{!! url('bower_components/asset-admin-lte/admin/dist/img/avatar.png') !!}" class="user-image" alt="User Image">
                            @endif
                            <p>
                                <span class="hidden-xs">{!! Auth::user()->display_name !!}</span>
                                <small>Member since Nov. 2012</small>
                            </p>
                            <p>
                                <small>
                                    {!! Auth::user()->address !!}
                                        - 
                                    {!! Auth::user()->phone !!}
                                </small>
                            </p>
                        </li>

                        <!-- Menu Body -->
                        <!-- <li class="user-body">
                            <div class="col-xs-4 text-center"></div>
                            <div class="col-xs-4 text-center"></div>
                            <div class="col-xs-4 text-center"></div>
                        </li> -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <form action="{!! url('logout') !!}" method="post">
                                    {!! csrf_field() !!}
                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-danger"
                                                onclick="confirm('You are logout?') ? $(this).parent().submit(): false;" data-original-title="Logout">Logout
                                        </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>
