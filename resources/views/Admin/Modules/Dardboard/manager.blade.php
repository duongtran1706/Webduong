<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/13/2017
 * Time: 1:36 AM
 */
?>
@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin')
    Trang chủ manager
    @endsection
@section('content-admin')
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        @include('Admin.partial_admin.menu_admin')

    </nav>
    <!--page Content-->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        chào Admin {{Auth::user()->DisplayName}}
                    </h1>
                    @include('Admin.blocks.sucses')
                    @include('Admin.blocks.warnning')
                </div>
                <!-- col-lg-12-->
            </div>
        </div>
    </div>
@endsection