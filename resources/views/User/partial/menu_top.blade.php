<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/19/2017
 * Time: 9:41 PM
 */


?>
<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           {{-- <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>--}}
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                @foreach($category as $categories)
                    @if($categories->Display==1)
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{{$categories->name}}</a>
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
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->
</header>

