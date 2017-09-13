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
    Trang chủ Admin
@endsection
@section('content-admin')
    <div id="wrapper">
        <!-- Navigation -->
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
                <!--row-->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cube fa-fw fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            {{count($category)}}
                                        </div>
                                        <div> Danh Mục</div>
                                    </div>
                                </div>

                            </div>
                            <a href="{{Route('catelist')}}">
                            <div class="panel-footer">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cube fa-fw fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ count($topic) }}</div>
                                        <div>Chủ Đề</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ Route('topiclist') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-fw fa-5x" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ count($user) }}</div>
                                        <div>Thành Viên</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ Route('userlist') }}">
                                <div class="panel-footer">
                                    <span class="pull-left">Xem chi tiết</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection