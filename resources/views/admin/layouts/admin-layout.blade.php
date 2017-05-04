<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title or "Admin Dashboard"}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('')}}/asset/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('')}}/asset/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('')}}/asset/admin/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{asset('')}}/asset/admin/plugins/datatables/dataTables.bootstrap.css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('')}}/asset/admin/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="{{asset('')}}/asset/admin/plugins/select2/select2.min.css"/>

    <!-- Master Upload -->
    <link rel="stylesheet" href="{{asset('asset/admin')}}/css/fileinput.min.css"/>
    <link rel="stylesheet" href="{{asset('asset/admin')}}/css/jquery.filer.css"/>
    <link rel="stylesheet" href="{{asset('asset/admin')}}/css/themes/jquery.filer-dragdropbox-theme.css"/>


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
                            <img src="{{$user->avatar or asset('asset/admin/dist/img/avatar.png')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{$user->username or "Admin"}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{$user->avatar or asset('asset/admin/dist/img/avatar.png')}}" class="img-circle" alt="User Image">
                                <p>
                                    {{$user->username or "Admin"}}
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
                                    <a href="" class="btn btn-default btn-flat">{{trans('admin.change_pass')}}</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{url('/logout')}}" class="btn btn-default btn-flat">{{trans('admin.logout')}}</a>
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
                    <img src="{{$user->avatar or asset('asset/admin/dist/img/avatar.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Admin</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <!-- /.search form -->
           

            <ul class="sidebar-menu">
                

                <li class="header" style=" text-transform: uppercase">{{trans('admin.main_navigation')}}</li>

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
<script src="{{asset('')}}/asset/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('')}}/asset/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{asset('')}}/asset/admin/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('')}}/asset/admin/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('')}}/asset/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->

<!-- SlimScroll 1.3.0 -->
<script src="{{asset('')}}/asset/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="{{asset('')}}/asset/admin/plugins/chartjs/Chart.min.js"></script>
<!-- DataTables -->
<script src="{{asset('')}}/asset/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('')}}/asset/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="{{asset('')}}/asset/admin/ckeditor/ckeditor.js"></script>

<script src="{{asset('')}}/asset/admin/plugins/select2/select2.full.min.js"></script>
<!-- Master upload -->
<script src="{{asset('')}}/asset/admin/js/fileinput.min.js"></script>
<script src="{{asset('')}}/asset/admin/js/jquery.filer.min.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

@yield('javascript')

</body>
</html>
