<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/19/2017
 * Time: 9:41 PM
 */


?>
<div class="main_menu_bg">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand our_logo" href="{{asset('images/logo.png')}}"><img src="{{asset('images/logo.png')}}" alt="" /></a>

                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- ẩn li gồm xóa và tạo lớp cho form -->
                            <li class="hidden">
                                <a class="page-scroll" href="#page-top"></a>
                            </li>
                            @foreach($category as $categories)
                                @if($categories->Display==1)
                                <li class="dropdown"><a class="page-scroll" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">{{$categories->name}}</a>
                                    <ul class="dropdown-menu">
                                        <?php $topic=DB::table('topic')->select('topic.*')->where('parent_id','=',$categories->id)->get();?>
                                        @foreach($topic as $Tp)
                                           @if($Tp->Display==1)
                                            <li>
                                                <a href="{{Route('getpostlist',['name'=>$Tp->namedescript])}}">{{$Tp->name}}</a>
                                            </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- nav link forms and orther-->


    </div>
</div>
</header>