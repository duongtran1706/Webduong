<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/30/2017
 * Time: 10:36 AM
 */
?>
<li>
    <a href=""><i class="fa fa-users fa-fw"></i>Thành Viên<span class="fa arrow"></span></a>

    <ul class="nav nav-third-level">
        <li>
            <a href="{{Route('userlist')}}"><i class="fa fa-list-alt" aria-hidden="true"></i>Danh sách thành viên</a>
        </li>
        <li>
            <a href="{{Route('useradd')}}"><i class="fa fa-plus" aria-hidden="true"></i>
                Thêm người dùng</a>
        </li>
    </ul>
</li>