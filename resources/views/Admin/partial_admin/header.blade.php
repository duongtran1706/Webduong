<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/21/2017
 * Time: 2:29 PM
 */
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> admin -@yield('title-admin')</title>
    <!--calendar-->
    <link href="{{asset('ad-style/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('ad-style/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <link href="{{asset('ad-style/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('ad-style/bower_components/datatables-responsive/css/dataTables.responsive.css')}}" rel="stylesheet">

    <!--stlyle css admin-->
    <link rel="stylesheet" href="{{asset('ad-style/css/style.css')}}">

    <!-- add morris plugin-->
    <link rel="stylesheet" href="{{asset('ad-style/css/plugins/morris.css')}}">
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  {{--  <script src="{{asset('public/tinymce/js/tinymce/jquery.tinymce.min.js')}}"></script>--}}
    <script src="{{asset('ad-style/tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            theme: 'modern',
            elements: "textarea_full",
            width: 960,
            height: 300,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'save table contextmenu directionality emoticons template paste textcolor media searchreplace'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview media fullpage | forecolor backcolor emoticons'
        });
    </script>

</head>
