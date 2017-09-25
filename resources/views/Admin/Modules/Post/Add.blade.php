<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 2:55 PM
 */
?>
@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin')
    Thêm Bài Viết Cho {{$name }}
@endsection
@section('content-admin')
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            @include('Admin.partial_admin.menu_admin')
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm bài viết {{$name }}
                        </h1>
                        @include('Admin.blocks.error')
                        @include('Admin.blocks.warnning')
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-8" style="padding-bottom:120px">
                        <form action="" method="POST">
                            @include('Admin.Layout_Admin.token')
                            <div class="form-group">
                                <label>Tiêu Đề: </label>
                                <input class="form-control" name="Title" placeholder="Nhập tên tiêu đề" />
                            </div>
                            <div class="form-group">
                                <label>Chủ Đề: </label>
                                <select class="form-control" name="parent_id" id="Chudelon">
                                    @foreach($topicparent as $tp)
                                        <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Miêu tả người dùng: </label>
                                <input class="form-control" name="UseDescription" placeholder="Nhập miêu tả" />
                            </div>
                            <div class="form-group">
                                <label>Miêu tả bài viết: </label>
                                <input class="form-control" name="Description" placeholder="Nhập miêu tả" />
                            </div>
                            <div class="form-group">
                                <label>Nội dung bài viết:</label>
                                <textarea id="textarea_full" class="form-control" row="10" name="ContentPost"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input name="Active" value="0" {{--@if($post->Active==0) checked @endif --}}type="radio">Không hiển thị trên menu
                                </label><br>
                                <label class="radio-inline">
                                    <input name="Active" value="1" {{--@if($post->Active==1) checked @endif--}} type="radio"> hiển thị trên menu
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                            <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection