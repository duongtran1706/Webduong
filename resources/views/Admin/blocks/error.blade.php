<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/28/2017
 * Time: 5:55 PM
 */
?>
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
    </div>
    @endif