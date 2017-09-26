<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/26/2017
 * Time: 1:03 AM
 */
?>

@extends('User.Layout.Layout')
@section('title')
    Trang chủ
@stop
@section('main-content')
    <section id="contentbody">
        <div class="row">
            @include('User.partial.sliderbar_left')
            @include('User.partial.main_content')
            @include('User.partial.right_sidebar')

        </div>
    </section>

@endsection
