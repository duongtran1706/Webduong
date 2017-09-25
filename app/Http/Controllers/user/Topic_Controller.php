<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Topic;
use DB;
use Auth;
class Topic_Controller extends Controller
{
    public function __construct()
    {
        $category=Category::all();
        return view()->share(['category'=>$category]);
    }
    public function GetTopicchild($namedescript){
        $getid=Topic::select('id')->where('namedescript','=',$namedescript)->value('id');
        $topicchild=Topic::where('parent_id','=',$getid)->get();
        return view('User.Post.post',['topicchild'=>$topicchild]);
    }
}
