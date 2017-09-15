<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/19/2017
 * Time: 9:49 PM
 */
?>
<!-- Header Top -->
<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<header id="home" class="navbar-fixed-top">
    <div class="header_top_menu clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">
                    <div class="call_us_text">
                        <a href=""><i class="fa fa-phone"></i>061 9876 5432</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="head_top_social text-right">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        <a href=""><i class="fa fa-youtube"></i></a>
                        <a href=""><i class="fa fa-camera"></i></a>
                        {{--<a href=""><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a>--}}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sign-in" aria-hidden="true">Đăng Nhập</i></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Đăng nhập</p>
                                            <div class="social-buttons">
                                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                            </div>
                                            or
                                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                    <label class="sr-only" for="#" >Email address</label>
                                                    <input type="email" class="form-control" id="#" placeholder="nhập tên đăng nhập" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Nhập mật khẩu" required>
                                                    <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Nhớ mật khẩu
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="bottom text-center">
                                            <a href="#">Đăng Ký </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End navbar-collapse-->
<!-- Header Top End -->