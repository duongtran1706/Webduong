<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/21/2017
 * Time: 3:16 PM
 */
?>
<div id="wrapper">
    <!--Navigation-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!--menu moblie-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>

        </div>
        <!--menu top -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu message-dropdown">
                    {{--thong bao--}}
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                <span class="pull-left">

                                </span>
                            </div>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
</div>
