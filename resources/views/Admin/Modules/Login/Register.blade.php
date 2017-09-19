<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/19/2017
 * Time: 12:18 PM
 */
?>
@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin','Đăng Ký Thành Viên')
@section('content-admin')
    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <h5>Đăng Ký Thành Viên</h5>
                @include('Admin.blocks.error')
                @include('Admin.blocks.warnning')
                <form class="" method="post" action="Register">
                    @include('Admin.Layout_Admin.token')
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Nhập Tên</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Nhập Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Nhập Email của bạn"/>
                            </div>
                        </div>
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
                        <label for="username" class="cols-sm-2 control-label">Nhập Tên đăng nhập</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="username" id="username"  placeholder="Nhập tên đăng nhập"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Mật Khẩu</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Nhập mật khẩu"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="passwordAgain" class="cols-sm-2 control-label">Nhập Lại Mật Khẩu</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="passwordAgain" id="passwordAgain"  placeholder="Nhập lại mật khẩu"/>
                            </div>
                        </div>
                    </div>

                   <button type="submit"  class="btn btn-default" id="button">Đăng Ký</button>

                </form>
            </div>
        </div>
    </div>
@endsection
