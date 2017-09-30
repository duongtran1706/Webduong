<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/20/2017
 * Time: 7:55 PM
 */

?>
@extends('User.Layout.Layout')
@section('title')
    Trang chủ
@stop
@section('main-content')

    <div class="wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?php $title=DB::table('topic')->select('topic.name')->where('namedescript','=',$name)->value('name');?>
                            <i class="fa fa-list fa-2x" aria-hidden="true">
                                {{ $title}}</i></h3>
                    </div>
                    <ul class="list-group">

                        @foreach($topicchild as $tpc)
                            <a href="#" class="list-group-item"><i class="fa fa-list-ul " aria-hidden="true">
                                    {{$tpc->name}}</i></a>
                        @endforeach
                    </ul>


                </div>
            </div>
            {{--center --}}
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-content">
                            <h2>
                                {{$topicchild}}
                            </h2>
                    </div>

                </div>
            </div>
            {{--right -sliebar--}}
            <div class="col-md-3">
                <div class="panel panel-default left">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Menu Hiển thị</h3>
                    </div>
                    <ul class="list-group">
                        <a>
                        </a>
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection
