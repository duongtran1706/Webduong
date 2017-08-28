<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/28/2017
 * Time: 3:27 PM
 */
?>
@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin','Đăng nhập hệ thống')
    @section('content-admin')
        <div class="container">
            <div class="card card-container">
                            <img id="profile-img" class="profile-img-card" src="{{asset('ad-style/images/avatar.png')}}" />
                            <p id="profile-name" class="profile-name-card">
                                Đăng nhập hệ thống
                            </p>
                        @include('Admin.blocks.error')
                        @include('Admin.blocks.warnning')
                            <form  class="form-signin" role="form" action="" method="POST">
                                @include('Admin.Layout_Admin.token')
                                    <span id="reauth-email" class="reauth-email"></span>
                                    <input name="username"  class="form-control" placeholder="Usename or Email" type="text" autofocus>
                                    <input name="password" class="form-control" placeholder="Password" type="password">
                                    <div id="remember" class="checkbox">
                                        <label>
                                            <input type="checkbox" value="remember-me"> Remember me
                                        </label>
                                    </div>
                                    <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
                            </form>
                            <a href="#" class="forgot-password">
                                Forgot the password?
                            </a>
                        </div>
                    </div>
        @endsection