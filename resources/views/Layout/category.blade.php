<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/20/2017
 * Time: 11:39 PM
 */
?>

@extends('Layout.Layout')
@section('content')
    <div class="page-header content-page-header">
        <h1>{{$category->name}}</h1>
        <p>{{$category->description}}</p>
    </div>
@stop