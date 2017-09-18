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
    Danh Sách người dùng
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
                            Danh Sách người dùng
                        </h1>
                        @include('Admin.blocks.sucses')
                        @include('Admin.blocks.warnning')
                    </div>
                    <!-- col-lg-12-->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên người dùng</th>
                            <th>Tên Đầy Đủ</th>
                            <th>Tên Đăng Nhập</th>
                            <th>Email</th>
                            <th>Ngày Sinh</th>
                            <th>Quyền Truy Cập</th>
                            <th>Xóa</th>
                            <th>Sửa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $us)
                            <tr class="odd gradeX" align="center">
                                <td>{{$us->id}}</td>
                                <td><div>{{$us->name}}</div></td>
                                <td><div >{{$us->DisplayName}}</div></td>
                                <td><div >{{$us->username}}</div></td>
                                <td><div>{{$us->email}}</div></td>
                                <td><div >{{$us->Birthday}}</div></td>
                                <td>@if($us->level!=1)
                                        mormal
                                    @else
                                        Administrator
                                    @endif</td>
                                <td class="center">
                                    <a href="delete/{{$us->id}}" onclick="return confirmAction()"><i class="fa fa-ban" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td class="center"><a href="edit/{{ $us->id }}"><i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>

            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection

