<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/28/2017
 * Time: 5:56 PM
 */
?>
@if(session('warning'))
    <div class="alert alert-danger">
        {{session('warning')}}
    </div>
@endif
