<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/29/2017
 * Time: 10:30 AM
 */
?>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav " id="side-menu">
            <li>
                <a href="{{ url('admin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href=""><i class="fa fa-star-half-o"></i> Intro</a>
            </li>
            @include('Admin.partial_admin.menu_category')
            @include('Admin.partial_admin.menu_topic')
            @foreach($category as $cate)
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i> {{$cate->name}}<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    @foreach($cate->Topic as $tp)
                    <li>
                        <a href="#"><i class="fa fa-cube fa-fw"></i>{{$tp->name}}<span class="fa arrow"></span></a>

                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{Route('postlist',$tp->namedescript,$cate->namedescript,$tp->id)}}"><i class="fa fa-list-alt" aria-hidden="true"></i>Danh sách {{$tp->name}}</a>
                                </li>
                                <li>
                                    <a href="{{Route('addpost',$tp->namedescript,$cate->namedescript,$tp->id)}}"><i class="fa fa-plus" aria-hidden="true"></i>
                                        Thêm bài viết</a>
                                </li>
                            </ul>
                    </li>
                    @endforeach
                </ul>

                <!-- /.nav-second-level -->
            </li>
            @endforeach
           {{-- @if(Auth::user()->level == 1)
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Thành viên<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="">Danh sách</a>
                        </li>
                        <li>
                            <a href="">Thêm thành viên</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            @endif--}}
            @include('Admin.partial_admin.menu_users')
        </ul>

    </div>
    <!-- /.sidebar-collapse -->
</div>

<!-- /.navbar-collapse -->
