<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 9:56 AM
 */
?>

@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin','Quan ly')
@section('content-admin')
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            @include('Admin.partial_admin.menu_admin')
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Xin chào Manager {{ Auth::user()->displayname }}</h1>
                    @include('Admin.blocks.warning')
                    @include('Admin.blocks.sucsses')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="text-align: center;padding-top: 50px;">
                <img src="{{ url('public/admin/logo.png') }}" style="width:100%;">
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
@endsection
