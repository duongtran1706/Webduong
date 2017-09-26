<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/14/2017
 * Time: 4:01 PM
 */
?>
        <!doctype html>
<html lang="{{ config('app.locale') }}">
@include('User.partial.header')
<body >
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    @include('User.partial.topbar')
    @include('User.partial.menu_top')
{{--content main--}}
    @yield('main-content')
    @include('User.partial.footer')
</body>
</html>

