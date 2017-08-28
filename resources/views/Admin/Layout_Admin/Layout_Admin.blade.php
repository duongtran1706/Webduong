<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/21/2017
 * Time: 2:28 PM
 */
?>
<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
    @include('Admin.partial_admin.header')
    <body>
    @yield('content-admin')
    <SCRIPT LANGUAGE="JavaScript">
        function confirmAction() {
            return confirm("Bạn có chắc chắn muốn xóa k?")
        }
    </SCRIPT>

    @extends('Admin.partial_admin.footer')
    </body>
</html>
