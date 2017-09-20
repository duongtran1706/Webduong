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
    public  function __construct()
    {
        $category = Category::all();
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
        $category= new Category;
        $category->name=$request->name;
        $category->namedescript= str_slug($request->name,'_');
        $category->Description=$request->Description;
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