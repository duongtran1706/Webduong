<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 2:55 PM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 2:56 PM
 */
?>

@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin')
    Thêm người dùng
@endsection
@section('content-admin')
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            @include('Admin.partial_admin.menu_admin')

        </nav>
        <!--page list-->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Thêm người dùng
                        </h1>
                        @include('Admin.blocks.error')
                        @include('Admin.blocks.warnning')
                    </div>
                    <!-- col-lg-12-->
                    <div class="col-lg-8" style="padding-bottom: 120px">
                        <form action="" method="POST">
                            @include('Admin.Layout_Admin.token')
                            <div class="form-group">
                                <label>Tên người dùng</label>
                                <input class="form-control" name="name" placeholder="Nhập Tên">
                            </div>
                            <div class="form-group">
                                <label>Tên Đầy Đủ</label>
                                <input class="form-control" name="DisplayName" placeholder="Nhập tên Đầy Đủ">
                            </div>
                            <div class="form-group">
                                <label>Tên Đăng nhập </label>
                                <input class="form-control" name="username" placeholder="Nhập tên Đầy Đủ">
                            </div>
                            <div class="form-group">
                                <label>mật khẩu </label>
                                <input class="form-control" name="password" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email"  placeholder="Nhập Email">
                            </div>
                            <div class="form-group">
                                <label>Ngày Sinh</label>
                                <div  id="datetimepicker1" class="input-append date">
                                    <input id="Birthday" name="Birthday" class="input-append date" data-format="yyyy/MM/dd" placeholder="Nhập ngày sinh" type="text">
                                    <span class="add-on">
                                          <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                        </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="radio-inline">
                                    <input name="level" value="0"  type="radio">normal
                                </label><br>
                                <label class="radio-inline">
                                    <input name="level" value="1"  type="radio"> Administrator
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa
                            </button>
                            <button type="reset" class="btn btn-default">làm mới
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection


