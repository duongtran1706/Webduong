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
@include('partial.header')
<body >
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    @include('partial.topbar')
    @include('partial.menu_top')
@include('partial.main_content')
    @include('partial.footer')
</body>
</html>

