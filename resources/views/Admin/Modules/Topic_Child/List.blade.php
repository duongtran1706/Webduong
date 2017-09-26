<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 10:49 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/29/2017
 * Time: 10:54 PM
 */
?>
@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin','Danh Sách Chủ Đề')
@section('content-admin')
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            @include('Admin.partial_admin.menu_admin')
        </nav>
        <!--page list-->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            CHỦ ĐỀ
                            <?php $title= DB::table('topic')->select('name')->where('namedescript','=',$name)->value('name') ?>
                            {{$title}}

                        </h1>
                        @include('Admin.blocks.sucses')
                        @include('Admin.blocks.warnning')
                    </div>
                    <!-- col-lg-12-->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên chủ đề</th>
                            <th>Hiển thị menu</th>
                            <th>Chủ Đề Lớn</th>
                            <th>Xem Chi tiết</th>
                            @if(Auth::user()->level==1)
                                <th>Xóa</th>
                                <th>Sửa</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($topic as $tp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tp->id}}</td>
                                <td>{{$tp->name}}</td>
                                <td>@if($tp->Display==0)
                                        Không hiển thị
                                    @else
                                        Hiển thị
                                    @endif</td>
                                <td>
                                    <?php
                                        if($tp->parent_id!=null){
                                    $topicparent=DB::table('topic')->where('id','=',$tp->parent_id)->value('name');
                                    echo $topicparent;
                                    }else{
                                            echo "không có chủ đề";
                                        }
                                    ?>
                                </td>
                                <td class="center">
                                    <a href="{{Route('postlist',[$tp->namedescript])}}"><i class="fa fa-list" aria-hidden="true"></i>

                                    </a>
                                </td>
                                @if(Auth::user()->level==1)
                                <td class="center">
                                    <a href="delete/{{$tp->id}}" onclick="return confirmAction()"><i class="fa fa-ban" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td class="center"><a href="edit/{{ $tp->id }}"><i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a></td>
                                    @endif
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>

            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection


