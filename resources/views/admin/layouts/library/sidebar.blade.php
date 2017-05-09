<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                @if (Auth::user()->avatar)
                    <img src="{!! Storage::url(Auth::user()->avatar); !!}" class="user-image" alt="User Image">
                @else
                    <img src="{!! url('bower_components/asset-admin-lte/admin/dist/img/avatar.png') !!}" class="user-image" alt="User Image">
                @endif
            </div>
            <div class="pull-left info">
                <p>{!! Auth::user()->display_name !!}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
            </div>
        </div>
    
        <ul class="sidebar-menu">
            <li class="header" style=" text-transform: uppercase">
            Main Navigation</li>
            <li class="treeview">
                <a href="{!! url('admin/users') !!}">
                    <i class="fa fa-book"></i>
                    <span>Manager User</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Manager 1</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="">
                            <i class="fa fa-play"></i>
                            <span>Sub Manager</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
