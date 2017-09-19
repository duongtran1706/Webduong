<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/19/2017
 * Time: 5:24 PM
 */
?>
@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin')
     Bài Viết
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
                        <h1 class="page-header">Chi tiết bài viết
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-8" style="padding-bottom:120px">
                         {{--ch tiết bài viết--}}
                        <h1> {{ $postdetail->Title }}</h1>
                        <h3>
                            {!! $postdetail->Description !!}
                        </h3>
                        {!! $postdetail->ContentPost !!}
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