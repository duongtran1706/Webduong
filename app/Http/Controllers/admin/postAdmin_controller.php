<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/31/2017
 * Time: 9:43 PM
 */
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Topic;
use App\Category;
use App\post;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class postAdmin_controller extends Controller
{
    public  function __construct()
    {
        $category = Category::all();
        return view()->share('category',$category);
    }
    public  function GetList($name){
        $topic=Topic::find($name);
        $temp1=DB::table('category')->join('topic','topic.category_id','=','category.id')->select('category.namedescript')->where('topic.namedescript','=',$name)->value('namedescript');
        $post=DB::table('post')->join('topic','topic.id','=','post.topic_id')->join('users','users.id','=','post.user_id')->select('post.*','users.name')->where('topic.namedescript','=',$name)->get();
       return view('Admin.Modules.'.$temp1.'.'.$name.'.List',['topic'=>$topic,'post'=>$post]);
       // return "$post";

    }
    public function GetEdit($name,$id){
        $post=post::find($id);
        $temp1=DB::table('category')->join('topic','topic.category_id','=','category.id')
            ->join('post','post.topic_id','=','topic.id')->select('category.namedescript')->where('post.id','=',$id)->value('namedescript');
     return view('Admin.Modules.'.$temp1.'.'.$name.'.Edit',['post'=>$post]);

    }
    public  function PostEdit(Request $request,$name,$id){
        $post=post::find($id);
        if($request->Title!=''&&$request->Title!=$post->Title){
            $this->validate($request,['Title'=>'unique.post,Title',],['Title.unique'=>'Tiêu đề đã tồn tại',]);
            $post->Title=$request->Title;
        }
        if($request->UseDescription!=''&&$request->UseDescription!=$post->UseDescription){
//           $this->validate($request,['UseDescription'=>'unique.post,UseDescription',],['UseDescription.unique'=>'miêu tả đã tồn tại',]);
            $post->UseDescription=$request->UseDescription;
        }
        if($request->Description!=''&&$request->Description!=$post->Description){
//            $this->validate($request,['Description'=>'unique.post,Description',],['Description.unique'=>'miêu tả đã tồn tại',]);
            $post->Description=$request->Description;
        }
        if($request->ContentPost!=''&&$request->ContentPost!=$post->ContentPost){
//            $this->validate($request,['ContentPost'=>'unique.post,ContentPost',],['ContentPost.unique'=>'nội dung đã tồn tại',]);
            $post->ContentPost=$request->ContentPost;
        }
        if($request->Picture!=''&&$request->Picture!=$post->Picture){
            $this->validate($request,['ContentPost'=>'unique.post,Picture',],['Picture.unique'=>'nội dung đã tồn tại',]);
            $post->Picture=$request->Picture;
        }
        $post->Active = $request->Active;
        $post->save();

        return redirect('admin/post/'.$name.'/list')->with('sucsses','Đã sửa thành công');
    }
    public function Delete($id){
        $post=post::find($id);
        if(Auth::user()->id==$post->user_id||Auth::user()->level==1){

        }
    }
}
