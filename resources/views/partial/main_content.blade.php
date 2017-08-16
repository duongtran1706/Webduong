<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/23/2017
 * Time: 9:21 PM
 */
?>
<div id="touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000">
<!-- indicators-->
    <ol class="carousel-indicators">
        <?php $i=0?>
        @while($i<count($post))
            <li data-target="#touch-slider" data-slide-to="{{$i}}" <?php if($i==0) echo "class='active'"; $i++?>></li>

        @endwhile
    </ol>
    <!--wrapper for slider-->
    <div class="carousel-inner" role="listbox">
    <?php $j=0 ?>
    @foreach($post as $posts)
    <div class="item <?php if($j==0) echo "active"; $j++ ?>">
        <img src="{{ $posts->Picture }}" class="slide-image" alt=""/>
        <div class="bs-slider-overlay"></div>
        <div class="row">
            <!--slide text layer-->
            <div class="slide-text slide_style_left">
                <h1 data-animation="animated zoomInRight"> {{$posts->Title}}</h1>
                <p data-animation="animated fadeInLeft">{{$posts->Description}}</p>

            </div>
        </div>
    </div>

        @endforeach
    </div>
    <!-- left control-->
    <a class=" left carousel-control" href="#touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <!-- right control-->
    <a class="right carousel-control" href="#touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">next</span>
    </a>
</div>
