<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/26/2017
 * Time: 2:31 PM
 */
?>
<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
    <div class="row">
        <div class="left_bar">
            <div class="single_leftbar">
                <h2><span>nội dung </span></h2>
                <div class="singleleft_inner">
                    <ul class="recentpost_nav wow fadeInDown">
                        @foreach($post as $posts)
                            <li><a href="#"><img src="{{$posts->Picture}}" alt=""></a> <a class="recent_title" href="#"> {{$posts->Title}}</a></li>

                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="single_leftbar wow fadeInDown">
                <h2><span>Side Add</span></h2>
                <div class="singleleft_inner"> <a href="#"><img src="images/150x600.jpg" style="width: 360px ;height: 140px;" alt=""></a></div>
            </div>
        </div>
    </div>
</div>
