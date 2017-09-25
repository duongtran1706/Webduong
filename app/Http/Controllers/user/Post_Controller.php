<?php

namespace App\Http\Controllers\user;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;
use DB;


class Post_Controller extends Controller
{
    public function __construct()
    {
        $category=Category::all();
        $topic=Topic::all();
        return view()->share(['category'=>$category,'topic'=>$topic]);
    }
    public  function GetListpost($name){
        $tp=DB::table('topic')->select('topic.*')->where('topic.namedescript','=',$name)->orderBy('DESC')->get();
        return view('User.Post.post',['tp'=>$tp]);
    }
}
