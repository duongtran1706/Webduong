<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 7/4/2017
 * Time: 11:04 PM
 */
?>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="row">
        <div class="right_bar">
            <div class="single_leftbar wow fadeInDown">
                <h2><span>Nội dung</span></h2>
                <div class="singleleft_inner">
                    <ul class="slider_right ppost_nav wow fadeInDown">
                        @foreach($post as $posts)
                        <li>
                            <div class="media"> <a href="#" class="media-left"> <img alt="" src="{{$posts->Picture}}"> </a>
                                <div class="media-body"> <a href="#" class="catg_title">{{$posts->Title}}</a></div>
                            </div>
                        </li>
                            @endforeach
                    </ul>
                </div>
            </div>
            <div class="single_leftbar wow fadeInDown">
                <ul class="nav nav-tabs custom-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Most Popular</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Most Reader</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Recent Comment</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <ul class="slider_right ppost_nav wow fadeInDown">
                            @foreach($post as $posts)
                                <li>
                                    <div class="media"> <a href="#" class="media-left"> <img alt="" src="{{$posts->Picture}}"> </a>
                                        <div class="media-body"> <a href="#" class="catg_title">{{$posts->Title}}</a></div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile">
                        <ul class="slider_right ppost_nav wow fadeInDown">
                            @foreach($post as $posts)
                                <li>
                                    <div class="media"> <a href="#" class="media-left"> <img alt="" src="{{$posts->Picture}}"> </a>
                                        <div class="media-body"> <a href="#" class="catg_title">{{$posts->Title}}</a></div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="messages">
                        <ul class="slider_right ppost_nav wow fadeInDown">
                            @foreach($post as $posts)
                                <li>
                                    <div class="media"> <a href="#" class="media-left"> <img alt="" src="{{$posts->Picture}}"> </a>
                                        <div class="media-body"> <a href="#" class="catg_title">{{$posts->Title}}</a></div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single_leftbar wow fadeInDown">
                <h2><span>Labels</span></h2>
                <div class="singleleft_inner">
                    <ul class="label_nav">
                        <li><a href="#">Arts</a></li>
                        <li><a href="#">Cinema</a></li>
                        <li><a href="#">Comedy</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Tourism</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">Nature</a></li>
                    </ul>
                </div>
            </div>
            <div class="single_leftbar wow fadeInDown">
                <h2><span>Links</span></h2>
                <div class="singleleft_inner">
                    <ul class="link_nav">
                        <li><a href="#">Blog Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Error Page</a></li>
                        <li><a href="#">Wpfreeware</a></li>
                        <li><a href="#">Facebook Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>