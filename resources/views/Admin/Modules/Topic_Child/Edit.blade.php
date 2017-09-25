<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 1:12 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/30/2017
 * Time: 11:50 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/29/2017
 * Time: 10:54 PM
 */
?>
@extends('Admin.Layout_Admin.Layout_Admin')
@section('title-admin','Sửa Danh Chủ đề')
@section('content-admin')
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            @include('Admin.partial_admin.menu_admin')

        </nav>
        <!--page list-->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            SỬA CHỬ ĐỀ
                            <?php $title= DB::table('topic')->select('name')->where('namedescript','=',$name)->value('name') ?>
                            {{$title}}

                        </h1>
                        @include('Admin.blocks.error')
                    </div>
                    <!-- col-lg-12-->
                    <div class="col-lg-8" style="padding-bottom: 120px">
                        <form action="" method="POST">
                            @include('Admin.Layout_Admin.token')
                            <div class="form-group">
                                <label>Tên chủ đề</label>
                                <input class="form-control" name="topicname" value="{{$topic->name}}" placeholder="Nhập tên chủ đề">
                            </div>
                            <div class="form-group">
                                <label> Chủ Đề Lớn</label>
                                <select class="form-control" name="parent_id" id="Chudelon">
                                    @if($topic->parent_id!=null)
                                        <?php $cate=DB::table('topic')->where('id',$topic->parent_id)->value('name'); ?>
                                            <option value="{{$topic->parent_id}}"><?php echo $cate; ?></option>
                                        @endif
                                        @foreach($category as $categories)
                                            <?php $topics=DB::table('topic')->select('topic.*')->where('parent_id','=',$categories->id)->get();?>
                                                @foreach($topics as $tp)
                                                    @if($tp->id!=$topic->parent_id)
                                                        <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                                                    @endif
                                                    @endforeach
                                        @endforeach

                                   {{-- @foreach($topic_check as $tp)
                                            @if($topic->parent_id!=null)
                                                @if($tp->id!=$topic->parent_id)
                                                    <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                                                @endif
                                            @else
                                                <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                                                @endif
                                    @endforeach--}}
                                        <option value="">NULL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input name="Display" value="0" @if($topic->Display==0) checked @endif type="radio">Không hiển thị trên menu
                                </label><br>
                                <label class="radio-inline">
                                    <input name="Display" value="0" @if($topic->Display==1) checked @endif type="radio"> hiển thị trên menu
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa
                            </button>
                            <button type="reset" class="btn btn-default">làm mới
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection



