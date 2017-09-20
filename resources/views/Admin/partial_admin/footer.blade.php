<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/21/2017
 * Time: 3:05 PM
 */
?>
{{--jquery add--}}
<script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
{{--Add bootstrap--}}
<script src="{{asset('js/bootstrap.min.js')}}"></script>
{{--custom layout js--}}
<script src="{{asset('ad-style/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('ad-style/js/menu.js')}}"></script>
<script src="{{asset('ad-style/js/metisMenu.min.js')}}"></script>
<script src="{{asset('ad-style//bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('ad-style/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
{{--add late--}}
<script src="{{asset('ad-style/js/plugins/morris/raphael.min.js')}}"></script>
<script src="{{asset('ad-style/js/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('ad-style/js/plugins/morris/morris-data.min.js')}}"></script>
<script src="{{asset('ad-style/js/app.js')}}"></script>
<script src="{{asset('ad-style/js/plugins/readmore.js')}}"></script>
<script src="{{asset('ad-style/js/sb-admin.js')}}"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    $(function() {
        $('#datetimepicker1').datetimepicker({
            language: 'pt-BR'
        });
        $('#datetimepicker2').datetimepicker({
            language: 'pt-BR'
        });
    });
</script>
<script>
    var count = $('#count')
    $('.notification').on('click',function () {
        setTimeout(function () {
            count.html(0);
            $('.unread').each(function () {
                $(this).removeClass('unread');
            });
        },500);
        $(get('MarkAllSeen',function () {

        }));
    });
</script>
