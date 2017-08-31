<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/30/2017
 * Time: 10:31 AM
 */
?>

    <li>
        <a href="#"><i class="fa fa-cube fa-fw"></i>Danh Mục<span class="fa arrow"></span></a>

        <ul class="nav nav-third-level">
            <li>
                <a href="{{Route('catelist')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>Danh sách danh mục</a>
            </li>
            <li>
                <a href="{{ Route('addcate') }}"><i class="fa fa-plus" aria-hidden="true"></i>
                    Thêm danh mục</a>
            </li>
        </ul>
    </li>

