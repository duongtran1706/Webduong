<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/19/2017
 * Time: 9:41 PM
 */


?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Menu Small</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#">Web Dương </a>
        </div>
        <!-- nav link forms and orther-->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav main-navbar-nav">
                <!-- ẩn li gồm xóa và tạo lớp cho form -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                @foreach($category as $categories)
                    <li class="dropdown"><a class="page-scroll" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">{{$categories->name}}</a>
                        <ul class="dropdown-menu">
                            @foreach($categories->Topic as $Tp)
                                <li class="children">
                                    <a href="#">{{$Tp->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach

            </ul>
        </div>

    </div>
</nav>
</header>