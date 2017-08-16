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
            @if ($i==0)
            <li data-target="#touch-silder" data-slide-to="{{$i}}"  class="active" ></li>
            @else
                <li data-target="#touch-silder" data-slide-to="{{$i}}" ></li>
            @endif
            <?php $i++ ?>
        @endwhile


    </ol>
</div>
