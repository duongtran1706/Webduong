<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/19/2017
 * Time: 12:15 AM
 */
?>
@extends('Manager.profile')
@section('useredit')
    <!--page list-->

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Chỉnh Sữa Thông Tin
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
                            <input class="form-control" name="name" value="{{$users->name}}" placeholder="Nhập Tên">
                        </div>
                        <div class="form-group">
                            <label>Tên Đầy Đủ</label>
                            <input class="form-control" name="DisplayName" value="{{$users->DisplayName}}" placeholder="Nhập tên Đầy Đủ">
                        </div>
                        <div class="form-group">
                            <label>Tên Đăng Nhập</label>
                            <input class="form-control" name="username" value="{{$users->username}}" placeholder="Nhập tên Đầy Đủ">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" value="{{$users->email}}" placeholder="Nhập Email">
                        </div>
                        <div class="form-group">
                            <label>Ngày Sinh</label>
                            <div  id="datetimepicker1" class="input-append date">
                                <input id="Birthday" name="Birthday" class="input-append date" data-format="dd/MM/yyyy" value="{{$users->Birthday}}" placeholder="Nhập ngày sinh" type="text">
                                <span class="add-on">
                                          <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                        </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tiểu Sử :</label>
                            <textarea id="textarea_full" class="form-control" row="10" name="biography">{{ $users->biography }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa
                        </button>

                    </form>
                </div>
            </div>

    <!-- /#page-wrapper -->
@endsection
