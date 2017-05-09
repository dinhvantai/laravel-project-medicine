<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('pageAdminTitle')</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    @include('admin.layouts.library.header-css')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.layouts.library.content-header')

    @include('admin.layouts.library.sidebar')

    <!-- Load Content -->
    @yield('content')
    <!-- End Load Content -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; {!! date('Y') !!}</strong> All rights reserved.
    </footer>

</div><!-- ./wrapper -->

@include('admin.layouts.library.footer-js')

<!-- Write Custome Javascrip -->
@yield('javascript')
<!-- End Write Custome Javascrip -->

</body>
</html>
