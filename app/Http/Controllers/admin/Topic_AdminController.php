<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Topic;
use App\Category;
use App\Http\Controllers\Controller;

class Topic_AdminController extends Controller
{
    public  function GetList(){
        $topic =Topic::all();
        $category=Category::all();
        return view('Admin.Modules.Topic.List',['topic'=>$topic,'category'=>$category]);
    }
    public function GetAdd(){
        $category=Category::all();
        return view('Admin.Modules.Topic.Add',['category'=>$category]);
    }
    public  function PostAdd(Request $request){
        $this->validate($request,['topicname'=>'required|unique:topic,name',],
            ['topicname.required'=>'Vui lòng nhập tên chủ đề',
                'topicname.unique'=>'Chủ Đề Đã tồn tại',]);
        $topic= new Topic;
        $topic->name=$request->topicname;
        $topic->category_id=$request->category_id;
        $topic->Display = $request->Display;
        $topic->save();
        return redirect('admin/topic/list')->with('sucsses','Đã thêm thành công');
    }
    public function GetEdit($id){
        $topic=Topic::find($id);
        $category=Category::all();
        return view('Admin.Modules.Topic.Edit',['topic'=>$topic,'category'=>$category]);
    }
    public function PostEdit(Request $request,$id){
        $topic = Topic::find($id);
        if($request->topicname != '' && $request->topicname != $topic->name) {
            $this->validate($request,[
                'topicname'  =>  'unique:topic,name',
            ],[
                'topicname.unique'   =>  'Danh mục đã tồn tại',
            ]);
            $topic->name = $request->topicname;
        }
        $topic->category_id=$request->category_id;
        $topic->Display = $request->Display;
        $topic->save();
        return redirect('admin/category/list')->with('sucsses','Đã sửa thành công');
    }
    public function Delete($id) {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect('admin/category/list')->with('sucsses','Đã xóa thành công');
    }
}
