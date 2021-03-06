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
@section('title-admin','Danh Sách Font End')
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
                            Font End
                        </h1>
                        @include('Admin.blocks.sucses')
                        @include('Admin.blocks.warnning')
                    </div>
                    <!-- col-lg-12-->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên FontEnd</th>
                            <th>Miểu tả của người dùng</th>
                            <th>Miểu tả</th>
                            <th>Nội Dung</th>
                            <th>Hình ảnh</th>
                            <th>Xem</th>
                            <th>Người Đăng</th>
                            <th>Ngày Đăng</th>
                            <th>Ngày Chỉnh Sửa</th>
                            <th>Hiển Thị</th>
                            <th>Xóa</th>
                            <th>Sửa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($post as $pt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$pt->id}}</td>
                                <td><div style="height: 200px;overflow: auto">{{$pt->Title}}</div></td>
                                <td><div style="height: 200px; overflow: auto">{{$pt->UseDescription}}</div></td>
                                <td>
                                    <div style="height: 200px; overflow: auto">{{$pt->Description}}
                                    </div></td>
                                <td><div style="height: 200px; overflow: auto">
                                    {{$pt->ContentPost}}
                                    </div></td>
                                <td>{{$pt->Picture}}</td>
                                <td>{{$pt->Seen}}</td>
                                <td>{{$pt->name}}</td>
                                <td>{{$pt->created_at}}</td>
                                <td>{{$pt->updated_at}}</td>
                                <td>@if($pt->Active==0)
                                        Không hiển thị
                                    @else
                                        Hiển thị
                                    @endif</td>
                                <td class="center">
                                    <a href="delete/{{$pt->id}}" onclick="return confirmAction()"><i class="fa fa-ban" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <td class="center"><a href="edit/{{ $pt->id }}"><i class="fa fa-pencil" aria-hidden="true"></i>
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

