<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/23/2017
 * Time: 9:21 PM
 */
?>
        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $i=0?>
                    @while($i<count($post))
                        <li data-target="#carousel-example" data-slide-to="{{$i}}" <?php if($i==0) echo "class='active'"; $i++ ?> ></li>

                    @endwhile
                </ol>

                <div class="carousel-inner">
                    <?php $j=0 ?>
                    @foreach($post as $posts)
                    <div class="item  <?php if($j==0) echo "active"; $j++ ?>">
                        <div class="hero">
                            <hgroup>
                                <h3>{{$posts->Title}} </h3>
                                <p>{{$posts->Description}}</p>
                            </hgroup>

                        </div>
                        <div class="overlay"></div>
                        <a href="#"><img  class="imageslider" src="{{ $posts->Picture }}" /></a>

                    </div>
                        @endforeach
                </div>

                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>