<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 3:24 PM
 */
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Category;
use  App\Topic;
use App\post;
use Auth;
use App\Http\Controllers\Controller;
class FontEndController  extends Controller
{
    public function GetList($id){
        $category=Category::all();
     $topic=Topic::find($id);
        /*     $post=Post::all()->find('');
          /*htmlcss id= 3
          $post1=DB::select('select * form post,topic where post.post_id==topic.id AND post.post_id==3');*/
        return view('Admin.Modules.FontEnd.Html_css.List',['category'=>$category]);
    }
}