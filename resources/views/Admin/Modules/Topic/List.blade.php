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
                        </h1>
                        @include('Admin.blocks.sucses')
                        @include('Admin.blocks.warnning')
                    </div>
                    <!-- col-lg-12-->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th>Hiển thị menu</th>
                            <th>Danh Mục</th>
                            <th></th>
                            <th></th>
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
                                   $category=DB::table('category')->where('id',$tp->category_id)->value('name');
                                    echo $category;
                                   ?>
                                </td>
                                <td class="center">
                                    <a href="delete/{{$tp->id}}" onclick="return confirmAction()"><i class="fa fa-ban" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td class="center"><a href="edit/{{ $tp->id }}"><i class="fa fa-pencil" aria-hidden="true"></i>
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


