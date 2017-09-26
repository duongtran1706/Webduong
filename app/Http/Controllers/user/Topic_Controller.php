<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use App\post;
use DB;
use Auth;
class Topic_Controller extends Controller
{
    public function __construct()
    {
        $category=Topic::where('parent_id','=',null)->get();
        $post=post::all()->take(5);
        return view()->share(['category'=>$category,'post'=>$post]);
    }
    public function GetTopicchild($namedescript){
        $getid=Topic::select('id')->where('namedescript','=',$namedescript)->value('id');
        $topicchild=Topic::where('parent_id','=',$getid)->get();
        return view('User.Post.post',['topicchild'=>$topicchild,'name'=>$namedescript]);
    }
}
