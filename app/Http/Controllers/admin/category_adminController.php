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
use App\Category;
use App\Http\Controllers\Controller;
class category_adminController extends Controller{
    public function  GetList(){
        $category=Category::all();
        return view('Admin.Modules.Category.List',['category'=>$category]);
    }
    public  function GetAdd(){
        $category=Category::all();
        return view('Admin.Modules.Category.Add',['category'=>$category]);
    }
    public function PostAdd(Request $request){
        $this->validate($request,['catename'=>'required|unique:category,name'],['catename.required' =>  'Vui lòng nhập tên danh mục',
            'catename.unique'   =>  'Danh mục đã tồn tại']);
        $category= new Category;
        $category->name=$request->catename;
        $category->Display=$request->Display;
        $category->save();
        return redirect('admin/category/list')->with('sucsses','Đã thêm thành công');
    }
    public function GetEdit($id){
        $category=Category::all();
        $cate=Category::find($id);
        return view('Admin.Modules.Category.edit',['category'=>$category,'cate'=>$cate]);

    }
    public  function PostEdit(Request $request,$id){
        $category=Category::find($id);
        if($request->catename!=''&&$request->catename!=$category->name){
            $this->validate($request,['catename'=>'unique.category,name',],['catename.unique'=>'Danh mục đã tồn tại',]);
            $category->name=$request->catename;

        }
        $category->Display = $request->Display;
        $category->save();
        return redirect('admin/category/list')->with('sucsses','Đã sửa thành công');
    }
    public function Delete($id){
        $category=Category::find($id);
        $category->delete();
        return redirect('admin/category/list')->with('sucsses','Đã xóa thành công');
    }
}