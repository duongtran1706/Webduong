<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 2:56 PM
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
@section('title-admin')
    Danh Sách Danh mục
    @endsection
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
                            Danh Sách Danh mục
                        </h1>
                        @include('Admin.blocks.sucses')
                        @include('Admin.blocks.warnning')
                    </div>
                    <!-- col-lg-12-->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên Danh Mục</th>
                            <th>Miểu tả</th>
                            <th>Hiển Thị</th>
                            <th>Xóa</th>
                            <th>Sửa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $cate)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cate->id}}</td>
                                <td><div style="height: 200px;overflow: auto">{{$cate->name}}</div></td>
                                <td><div style="height: 200px; overflow: auto">{{$cate->Discription}}</div></td>
                                <td>@if($cate->Display==0)
                                        Không hiển thị
                                    @else
                                        Hiển thị
                                    @endif</td>
                                <td class="center">
                                    <a href="delete/{{$cate->id}}" onclick="return confirmAction()"><i class="fa fa-ban" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td class="center"><a href="edit/{{ $cate->id }}"><i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a></td>
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

