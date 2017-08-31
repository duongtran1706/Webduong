<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/30/2017
 * Time: 8:01 PM
 */
?>
@if(session('sucsses'))
    <div class="alert alert-success">
        {{session('sucsses')}}
    </div>
@endif

