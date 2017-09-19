<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/21/2017
 * Time: 3:16 PM
 */
?>

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{url('/admin')}}">@if(Auth::user()->level==1)  SB Admin @else SB Manager @endif</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
               <!--message-->
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
                <!--end message-->
            </li>
            <!--message infor-->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle notification" data-toggle="dropdown">
                    <i class="fa fa-bell"></i> @if(count(auth()->user()->unreadNotifications)!=0) <span id="count" class="notifi">{{count(auth()->user()->unreadNotifications)}}</span>@endif</a>
                <!--message-->
                <ul class="dropdown-menu message-dropdown" id="showNotification">
                    @foreach(auth()->user()->notifications as $note)
                        <li class="message-preview">
                                {!! $note->data['data'] !!}
                                <?php $note->markAsRead();?>

                        </li>
                    @endforeach
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
                <!--end message-->
            </li>
            <!--end info-->
            <!--login-->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img  class="images" src="{{Auth::user()->Avatar}}" alt="Mountain View" >{{Auth::user()->DisplayName}} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{Route('profile')}}"><i class="fa fa-fw fa-user"></i> Thông Tin</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="{{route('changepassword')}}"><i class="fa fa-unlock" aria-hidden="true"></i>
                            Thay đổi mật khẩu</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{Route('Logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
            <!--end login-->
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
@include('Admin.partial_admin.menu_left_admin')
