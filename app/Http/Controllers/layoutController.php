<?php
/**
 * Created by PhpStorm.
 * User: duong
 * Date: 6/20/2017
 * Time: 10:53 PM
 */
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
class layoutController extends Controller{
    public function Category($slug){
        $category=Category::whereSlug($slug)->first();
        if($category){
            return view('Layout.category',compact('Category'));
        }else { return "Không tìm thấy file";}
    }
    public function home(){
        $category=Category::all();
        return view('Layout.Layout',['category'=>$category]);
    }
}