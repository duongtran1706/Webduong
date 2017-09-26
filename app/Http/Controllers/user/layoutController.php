<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/20/2017
 * Time: 10:53 PM
 */
namespace App\Http\Controllers\user;
use App\Topic;
use Illuminate\Http\Request;
use App\post;
/*use App\Http\Request;*/
use App\Http\Controllers\Controller;
class layoutController extends Controller{

public  function __construct()
{
    $category=Topic::where('parent_id','=',null)->get();
    return view()->share('category',$category);
}

    public function Category($slug){
        $category=Category::whereSlug($slug)->first();
        if($category){
            return view('Layout.category',compact('Category'));
        }else { return "Không tìm thấy file";}
    }
    public function home(){
        $post=post::all()->take(5);
        $category=Topic::where('parent_id','=',null)->get();

        return view('User.Home.Home',['post'=>$post]);
    }

}