<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 2:56 PM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/30/2017
 * Time: 11:50 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/29/2017
 * Time: 10:54 PM
 */
?>
@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin','Sửa Bài Đăng')
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
                            SỬA BÀI VIẾT
                        </h1>
                        @include('Admin.blocks.error')
                        @include('Admin.blocks.warnning')
                    </div>
                    <!-- col-lg-12-->
                    <div class="col-lg-8" style="padding-bottom: 120px">
                        <form action="" method="POST">
                            @include('Admin.Layout_Admin.token')
                            <div class="form-group">
                                <label>Tiêu Đề</label>
                                <input class="form-control" name="Title" value="{{$post->Title}}" placeholder="Nhập Tiêu đề">
                            </div>
                            <div class="form-group">
                                <label>người dùng miêu tả</label>
                                <input class="form-control" name="UseDescription" value="{{$post->UseDescription}}" placeholder="Nhập Tiêu đề">
                            </div>
                            <div class="form-group">
                                <label>Miêu tả</label>
                                <input class="form-control" name="Description" value="{{$post->Description}}" placeholder="Nhập Tiêu đề">
                            </div>
                            <div class="form-group">
                                <label>Nội dung bài viết:</label>
                                <textarea id="textarea_full" class="form-control" row="10" name="content">{{ $post->ContentPost }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input class="form-control" name="Picture" value="{{$post->Picture}}" placeholder="Nhập Tiêu đề">
                            </div>
                            <div class="form-group">
                                <label>ngày Đăng</label>
                                    <div  id="datetimepicker1" class="input-append date">
                                        <input id="created_at" class="input-append date" data-format="dd/MM/yyyy hh:mm:ss" value="{{$post->created_at}}" placeholder="Nhập ngày đăng" type="text">
                                        <span class="add-on">
                                          <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                        </span>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>ngày sửa</label>
                                <div  id="datetimepicker2" class="input-append date">
                                    <input id="updated_at" class="input-append date" data-format="dd/MM/yyyy hh:mm:ss" value="{{$post->updated_at}}" placeholder="Nhập cập nhật"  type="text">
                                    <span class="add-on">
                                          <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                        </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="radio-inline">
                                    <input name="Active" value="0" @if($post->Active==0) checked @endif type="radio">Không hiển thị trên menu
                                </label><br>
                                <label class="radio-inline">
                                    <input name="Active" value="1" @if($post->Active==1) checked @endif type="radio"> hiển thị trên menu
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


