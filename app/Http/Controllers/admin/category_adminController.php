<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/29/2017
 * Time: 10:50 PM
 */
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Topic;
use App\Http\Controllers\Controller;
class category_adminController extends Controller{
    public  function __construct()
    {
        /*take parent_id= null is category*/
        $category = Topic::where('parent_id','=',null)->get();
        return view()->share('category',$category);
    }
    public function  GetList(){
        return view('Admin.Modules.Category.List');
    }
    public  function GetAdd(){
        return view('Admin.Modules.Category.Add');
    }
    public function PostAdd(Request $request){
        $this->validate($request,['name'=>'required|unique:category,name'],['name.required' =>  'Vui lòng nhập tên danh mục',
            'name.unique'   =>  'Danh mục đã tồn tại']);
        $category= new Topic();
        $category->name=$request->name;
        $category->namedescript= str_slug($request->name,'-');
        $category->Description=$request->Description;
        $category->Display=$request->Display;
        $category->parent_id=null;
        $category->save();
        return redirect('admin/category/list')->with('sucsses','Đã thêm thành công');
    }
    public function GetEdit($id){
        $cate=Topic::find($id);
        return view('Admin.Modules.Category.edit',['cate'=>$cate]);

    }
    public  function PostEdit(Request $request,$id){
        $category=Topic::find($id);
        if($request->catename!=''&&$request->catename!=$category->name){
            $this->validate($request,['catename'=>'unique.category,name',],['catename.unique'=>'Danh mục đã tồn tại',]);
            $category->name=$request->catename;

        }
        $category->Display = $request->Display;
        $category->save();
        return redirect('admin/category/list')->with('sucsses','Đã sửa thành công');
    }
    public function Delete($id){
        $category=Topic::find($id);
        $category->delete();
        return redirect('admin/category/list')->with('sucsses','Đã xóa thành công');
    }
}