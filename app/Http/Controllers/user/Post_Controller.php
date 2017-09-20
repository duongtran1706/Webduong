<?php

namespace App\Http\Controllers\user;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;
use App\Category;
use DB;


class Post_Controller extends Controller
{
    public function __construct()
    {
        $category=Category::all();
        $topic=Topic::all();
        return view()->share(['category'=>$category,'topic'=>$topic]);
    }
    public  function GetListpost(){

    }
}
