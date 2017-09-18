<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/18/2017
 * Time: 5:54 PM
 */
?>
@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin')
    chi tiết người dùng
@endsection
@section('content-admin')
<div class="mainprofile container-fluid">
    <div class="row">
        <div style="padding-top:50px;"> </div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="{{Auth::user()->Avatar}}" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h3><strong>Tiểu Sử</strong></h3>
                            {{Auth::user()->biography}}
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span>
                        <h1 class="panel-title pull-left" style="font-size:30px;">{{Auth::user()->DisplayName}} <small> Email: {{Auth::user()->email}}</small> <i class="fa fa-check text-success" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="John Doe is sharing with you"></i></h1>
                        <div class="dropdown pull-right">
                            <a class="btn btn-success dropdown-toggle"  href="{{route('edit_user_profile',Auth::user()->id)}}" aria-haspopup="true" aria-expanded="true">
                                Edit profile
                                <span class="caret"></span>
                            </a>
                        </div>
                    </span>
                    <br><br>
                    <div><i class="fa fa-birthday-cake" aria-hidden="true"></i>
                    Ngày Sinh: {{Auth::user()->Birthday}}</div>

                    <br><br><hr>
                    <span class="pull-left">
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-files-o" aria-hidden="true"></i> Đăng Bài</a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-picture-o" aria-hidden="true"></i> Photos <span class="badge">42</span></a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Contacts <span class="badge">42</span></a>
                    </span>
                    <span class="pull-right">
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-at" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mention"></i></a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-envelope-o" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Message"></i></a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-ban" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Ignore"></i></a>
                    </span>
                </div>
            </div>
            <hr>
            <!-- nội dung cần thêm-->
            <div class="panel panel-default">
                <div class="panel-body">
                   <!-edit profile-->
                    @include('Admin.blocks.sucses')
                    @include('Admin.blocks.warnning')
                    @yield('useredit')
                </div>
            </div>


        </div>
    </div>
</div>
    @endsection
