<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Topic;
use App\Http\Controllers\Controller;

class Topic_AdminController extends Controller
{
    public function __construct()
    {
        $category = Topic::where('parent_id','=',null)->get();
        return view()->share('category',$category);
    }

    public  function GetList(){
       /* $topic =Topic::where('parent_id','!=',null)->get();*/
        return view('Admin.Modules.Topic.List'/*,['topic'=>$topic]*/);
    }
    public function GetAdd(){
        return view('Admin.Modules.Topic.Add');
    }
    public  function PostAdd(Request $request){
        $this->validate($request,['topicname'=>'required|unique:topic,name',],
            ['topicname.required'=>'Vui lòng nhập tên chủ đề',
                'topicname.unique'=>'Chủ Đề Đã tồn tại',]);
        $topic= new Topic;
        $topic->name=$request->topicname;
        $topic->parent_id = $request->category;
        $topic->Description=$request->description;
        $topic->namedescript=str_slug($request->topicname,'_');
        /*$topic->category_id=$request->category;*/
        $topic->Display = $request->Display;

        $topic->save();
        return redirect('admin/topic/list')->with('sucsses','Đã thêm thành công');
    }
    public function GetEdit($id){
        $topic=Topic::find($id);
        return view('Admin.Modules.Topic.Edit',['topic'=>$topic]);
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
        $topic->namedescript = str_slug($request->topicname,'-');
        $topic->parent_id=$request->category_id;
        $topic->Display = $request->Display;
        $topic->save();
        return redirect('admin/topic/list')->with('sucsses','Đã sửa thành công');
    }
    public function Delete($id) {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect('admin/topic/list')->with('sucsses','Đã xóa thành công');
    }
    public function GetListChild($name){
        $tp=Topic::select('id')->where('namedescript','=',$name)->value('id');
        $topic=Topic::where('parent_id','=',$tp)->get();
        return view('Admin.Modules.Topic_Child.List',['topic'=>$topic,'name'=>$name]);
    }
    public function GetAddChild($id,$name){
        $topic =Topic::where('topic.parent_id','=',$id)->get();
        return view('Admin.Modules.Topic_Child.Add',['topic'=>$topic,'name'=>$name]);
    }
    public  function PostAddChild(Request $request,$id,$name){
        $this->validate($request,['topicname'=>'required|unique:topic,name',],
            ['topicname.required'=>'Vui lòng nhập tên chủ đề',
                'topicname.unique'=>'Chủ Đề Đã tồn tại',]);
        $topic= new Topic;
        $topic->name=$request->topicname;
        $topic->parent_id = $id;
        $topic->Description=$request->description;
        $topic->namedescript=str_slug($request->topicname,'-');
        $topic->Display = $request->Display;

        $topic->save();
        return redirect('admin/topicchild/'.$name.'/list')->with('sucsses','Đã thêm thành công');
    }
    public function GetEditChild($name,$id){
        $topic=Topic::find($id);
        $topic_check=Topic::where('topic.parent_id','=',null)->get();
        return view('Admin.Modules.Topic_Child.Edit',['topic'=>$topic,'topic_check'=>$topic_check,'name'=>$name]);
    }
    public function PostEditChild(Request $request,$name,$id){
        $topic = Topic::find($id);
        if($request->topicname != '' && $request->topicname != $topic->name) {
            $this->validate($request,[
                'topicname'  =>  'unique:topic,name',
            ],[
                'topicname.unique'   =>  'Danh mục đã tồn tại',
            ]);
            $topic->name = $request->topicname;
        }
        $topic->namedescript = str_slug($request->topicname,'-');
       /* $topic->category_id=$request->category_id;*/
        $topic->parent_id = $request->parent_id;
        $topic->Display = $request->Display;
        $topic->save();
        return redirect('admin/topicchild/'.$name.'/list')->with('sucsses','Đã sửa thành công');
    }
    public function DeleteChild($name,$id) {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect('admin/topicchild/'.$name.'/list')->with('sucsses','Đã xóa thành công');
    }
}

