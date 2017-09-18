<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/20/2017
 * Time: 10:53 PM
 */
namespace App\Http\Controllers\user;
use Illuminate\Http\Request;
use App\Category;
use App\post;
/*use App\Http\Request;*/
use App\Http\Controllers\Controller;
class layoutController extends Controller{



    public function Category($slug){
        $category=Category::whereSlug($slug)->first();
        if($category){
            return view('Layout.category',compact('Category'));
        }else { return "Không tìm thấy file";}
    }
    public function home(){
        $category=Category::all();
        $post=post::all()->take(5);
        return view('Layout.Layout',['category'=>$category,'post'=>$post]);
    }

}