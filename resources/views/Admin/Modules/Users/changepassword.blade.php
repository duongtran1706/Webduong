<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/19/2017
 * Time: 9:41 AM
 */
?>

@extends('Admin.Modules.Dardboard.manager')
@section('title-admin')
    Đổi mật khẩu
    @endsection
@section('changepassword')
        <!-- Page Content -->

                    <div class="col-lg-12">
                        <h1 class="page-header">Đổi mật khẩu</h1>
                        @include('Admin.blocks.error')
                        @include('Admin.blocks.warnning')
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-8" style="padding-bottom:120px">
                        <form action="" method="POST">
                            @include('Admin.Layout_Admin.token')
                            <div class="form-group">
                                <label>Tên đăng nhập:</label>
                                <input class="form-control" name="user" value="{{ Auth::user()->username }}" disabled placeholder="Nhập tên đăng nhập"/>
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu cũ: </label>
                                <input type="password" class="form-control" name="oldpass" placeholder="Nhập mật khẩu cũ" />
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu mới</label>
                                <input type="password" class="form-control" name="newpass" placeholder="Nhập mật khẩu mới" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="repass" placeholder="Nhập lại mật khẩu mới" />
                            </div>
                            <button type="submit" class="btn btn-default">Xác Nhận</button>
                            <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
