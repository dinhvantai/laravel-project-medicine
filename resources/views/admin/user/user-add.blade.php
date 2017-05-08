@extends('admin.layouts.admin-layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add New User</h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('admin') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">New User</li>
        </ol>
    </section>

    <!-- Main content -->
    <?php if (isset($input)) print_r($input) ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-md-10">
                            <h3 class="box-title">New User</h3>
                        </div>
                        <div class="col-md-2 text-right">
                            <button type="submit" form="edit_infor" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Save" name="user_add_action" value="user_add_action">Save</button>

                            <a href="{!! url('admin/users') !!}" data-toggle="tooltip" class="btn btn-default" data-original-title="Cancel">
                                <i class="fa fa-reply"></i>
                            </a>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form id="edit_infor" class="form-horizontal" method="post" action="{!! url('admin/users') !!}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="col-sm-3 control-label">Email <span style="color: red">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="form-control"  value="{!! old('email') !!}" placeholder="Email">
                                        <span style="color:red">{!! $errors->first('email') !!}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-sm-3 control-label required">Display Name <span style="color: red">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="display_name" class="form-control"  value="{!! old('display_name') !!}" placeholder="Display Name">
                                        <span style="color:red">{!! $errors->first('display_name') !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" class="form-control" value="{!! old('phone') !!}" placeholder="Phone">
                                        <span style="color:red">{!! $errors->first('phone') !!}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-sm-3 control-label required">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" class="form-control"  value="{!! old('address') !!}" placeholder="Address">
                                        <span style="color:red">{!! $errors->first('address') !!}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="col-sm-3 control-label">Password <span style="color: red">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" value="" placeholder="Password">
                                        <span style="color:red">{!! $errors->first('password') !!}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-sm-3 control-label required">Confirm Password <span style="color: red">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="password" name="confirm_password" class="form-control"  value="" placeholder="Confirm Password">
                                        <span style="color:red">{!! $errors->first('confirm_password') !!}</span>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="col-sm-3 control-label required">Avatar</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="avatar" class="form-control">
                                        <span style="color:red">{!! $errors->first('avatar') !!}</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection