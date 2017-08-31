<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 1:12 PM
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
@section('title-admin','Sửa Danh Chủ đề')
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
                            SỬA CHỬ ĐỀ
                        </h1>
                        @include('Admin.blocks.error')
                    </div>
                    <!-- col-lg-12-->
                    <div class="col-lg-8" style="padding-bottom: 120px">
                        <form action="" method="POST">
                            @include('Admin.Layout_Admin.token')
                            <div class="form-group">
                                <label>Tên chủ đề</label>
                                <input class="form-control" name="topicname" value="{{$topic->name}}" placeholder="Nhập tên chủ đề">
                            </div>
                            <div class="form-group">
                                <label>id danh mục</label>
                                <input class="form-control" name="category_id" value="{{$topic->category_id}}" placeholder="Nhập tên chủ đề">
                            </div>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input name="Display" value="0" @if($topic->Display==0) checked @endif type="radio">Không hiển thị trên menu
                                </label><br>
                                <label class="radio-inline">
                                    <input name="Display" value="0" @if($topic->Display==1) checked @endif type="radio"> hiển thị trên menu
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



