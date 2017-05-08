@extends('admin.layouts.admin-layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User
            <small>List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url('admin') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User list</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-md-10">
                            <h3 class="box-title">User list</h3>
                        </div>
                        <div class="col-md-1 text-right">
                            <a href="{!! url('admin/users/create') !!}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add New"><i class="fa fa-plus"></i></a>
                        </div>
                        <div class="col-md-1">
                            <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Rebuild"><i class="fa fa-refresh"></i></a>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="user_list_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID #</th>
                                <th>Email</th>
                                <th>Display Name</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                            	$users = $data['users'];
                            	$currentUser = Auth::user();
                            ?>
                            
                            @foreach($users as $user)
                            
                                <tr>
                                    <td>
                                        <span><?php echo $user->id ?></span>
                                    </td>
                                    <td>
                                        <span><?php echo $user->email ?></span>
                                    </td>
                                    <td>
                                        <span><?php echo $user->display_name ?></span>
                                    </td>
                                    <td>
                                    	<?php $type = App\User::getPermissionOption()[$user->permission] ?>
                                        <span>
                                        	{!! $type['title'] !!}
                                        </span>
                                    </td>
                                    <td>
                                        <form action="{!! url('admin/users/'.$user->id) !!}" method="post">
                                        	<input type="hidden" name="_method" value="DELETE">
                                            {{csrf_field()}}

                                            <input type="hidden" name="id" value="{{$user->id}}"></input>
                                            <span class="text-right"><a href="{!! url('admin/users/'.$user->id.'/edit') !!}" data-toggle="tooltip" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-pencil"></i></a></span>
											@if ($currentUser->id != $user->id)
                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-danger"
                                                    onclick="confirm('{{trans('admin.confirm_delete')}}') ? $(this).parent().submit(): false;" data-original-title="Delete">
                                            	<i class="fa fa-trash-o"></i>
                                            </button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection

@section('javascript')
<script lang="javascript">
    $(function() {
        $("#user_list_table").DataTable();
    });
</script>
@endsection