<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title or "Admin Dashboard"}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{!! url('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! url('bower_components/font-awesome/css/font-awesome.min.css') !!}">
  
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! url('bower_components/asset-admin-lte/admin/dist/css/AdminLTE.min.css') !!}">
    <link rel="stylesheet" href="{!! url('bower_components/asset-admin-lte/admin/dist/css/skins/_all-skins.min.css') !!}">
    <link rel="stylesheet" href="{!! url('bower_components/asset-admin-lte/admin/plugins/datatables/dataTables.bootstrap.css') !!}"/>
  
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>DB</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>Dashboard</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{asset('')}}" target="_blank">{{trans('admin.go_home')}}</a>
                    </li>

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{!! url('bower_components/asset-admin-lte/admin/dist/img/avatar.png') !!}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{!! Auth::user()->display_name !!}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{!! url('bower_components/asset-admin-lte/admin/dist/img/avatar.png') !!}" class="img-circle" alt="User Image">
                                <p>
                                    {!! Auth::user()->display_name !!}
                                    <!-- <small> Từ năm 2016</small>-->
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <!-- <a href="#">Theo dõi</a>-->
                                </div>
                                <div class="col-xs-4 text-center">
                                    <!--<a href="#">Bán hàng</a>-->
                                </div>
                                <div class="col-xs-4 text-center">
                                    <!--<a href="#">Bạn bè</a>-->
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="" class="btn btn-default btn-flat">Change Password</a>
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

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{!! url('bower_components/asset-admin-lte/admin/dist/img/avatar.png') !!}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{!! Auth::user()->display_name !!}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <!-- /.search form -->
           

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
                        <span>{{trans('admin.manage_content')}}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{url('')}}/{{$language or 'vn'}}/admin/edit_home">
                                <i class="fa fa-play"></i>Slogan
                            </a>
                        </li>
                        <li>
                            <a href="{{url('')}}/{{$language or 'vn'}}/admin/edit_footer">
                                <i class="fa fa-play"></i>Footer
                            </a>
                        </li>
                        <li>
                            <a href="{{url('')}}/{{$language or 'vn'}}/admin/edit_contact">
                                <i class="fa fa-play"></i>{{trans('admin.page_contact')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{url('')}}/{{$language or 'vn'}}/admin/video_introduce">
                                <i class="fa fa-play"></i>Video quảng bá công ty
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i> <span>{{trans('admin.manage_interface')}}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{url('/admin/edit_logo')}}"><span class="glyphicon glyphicon-edit"></span>Logo</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/slider_list')}}"><span class="glyphicon glyphicon-edit"></span>Slider</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/partner_list')}}">
                                <span class="glyphicon glyphicon-edit"></span>{{trans('admin.partner')}}
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="{{url('/admin/order_list')}}">
                        <i class="fa fa-laptop"></i> <span>{{trans('language.Orders')}}</span>
                    </a>
                </li>
                
                <!--  <li class="treeview">
                  <a href="">
                      <i class="fa fa-user"></i> <span>Quản lý quản trị viên</span>
                      
                    </a>
                </li> -->
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Load Content -->
    @yield('content')
    <!-- End Load Content -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; {!! date('Y') !!}</strong> All rights reserved.
    </footer>

</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{!! url('bower_components/jquery/dist/jquery.min.js') !!}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{!! url('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! url('bower_components/asset-admin-lte/admin/dist/js/app.min.js') !!}"></script>

<!-- DataTables -->
<script src="{!! url('bower_components/asset-admin-lte/admin/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
<script src="{!! url('bower_components/asset-admin-lte/admin/plugins/datatables/dataTables.bootstrap.min.js') !!}"></script>
<script src="{!! url('bower_components/ckeditor/ckeditor.js') !!}"></script>

<!-- FastClick -->
<script src="{!! url('bower_components/asset-admin-lte/admin/plugins/fastclick/fastclick.min.js') !!}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{!! url('bower_components/asset-admin-lte/admin/plugins/slimScroll/jquery.slimscroll.min.js') !!}"></script>

@yield('javascript')

</body>
</html>
