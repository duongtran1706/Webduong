<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/12/2017
 * Time: 10:58 PM
 */namespace App\Http\Controllers\admin;
use App\User;
use Illuminate\Http\Request;
use App\Category;
use  App\Topic;
use Auth;
use App\Http\Controllers\Controller;
class userController extends Controller{

    public function __construct()
    {
        $user= User::all();
        $category=Category::all();
        return view()->share(['user'=>$user,'category'=>$category]);
    }

    public  function GetList(){
        return view('Admin.Modules.Users.List');
    }
    public  function GetAdd(){
        return view('Admin.Modules.Users.Add');
    }
    public function PostAdd(Request $request){
        $this->validate($request,[
            'name'      =>  'required',
            'username'      =>  'required|unique:users,username',
            'password'      =>  'required|min:6',
            'email'     =>  'required|unique:users,email',
        ],[
            'name.required'     =>  'Bạn chưa nhập tên hiển thị',
            'username.required'     =>  'Bạn chưa nhập tên đăng nhập',
            'username.unique'       =>  'Tài khoản này đã tồn tại',
            'password.required'     =>  'Bạn chưa nhập mật khẩu',
            'password.min'          =>  'Mật khẩu phải có ít nhất 6 ký tự',
            'email.required'    =>  'Bạn chưa nhập Email liên hệ',
            'email.unique'      =>  'Email này đã được sử dụng',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->Birthday = $request->Birthday;
        $user->DisplayName = $request->DisplayName;
        $user->password = bcrypt($request->password);

        if(Auth::user()->id == 8) {
            $user->level = $request->level;
        }else {
            $user->level = 0;
        }
        $user->save();
        return redirect('admin/user/list')->with('sucsses','Đã thêm thành công');
    }
    public  function GetEdit($id){
        $users = User::find($id);
        if($users->level == 0) {
            return view('Admin.Modules.Users.Edit',['users'=>$users]);
        }else {
            /*chỉnh sửa sau*/
            if(Auth::user()->id == 8 || Auth::user()->id == $users->id ) {
                return view('Admin.Modules.Users.Edit',['users'=>$users]);
            }else {
                return redirect()->back()->with('warnning','Bạn không có quyền sửa Super Admin khác!');
            }
        }
    }
    public  function PostEdit(Request $request,$id){
        $users = User::find($id);
        if($users->id == 0) {
            if($request->name != '') {
                $users->name = $request->name;
            }
            if($request->username != '' && $request->username != $users->username) {
                $this->validate($request,[
                    'username' =>   'unique:users,username',
                ],[
                    'username.unique' =>  'Tài khoản này đã tồn tại',
                ]);
                $users->username = $request->username;
            }
            /*if($request->repass != '') {
                $this->validate($request,[
                    'pass'          =>  'min:6',
                    'repass'        =>  'same:pass',
                ],[
                    'pass.min'      =>  'Mật khẩu phải có ít nhất 6 ký tự',
                    'repass.same'   =>  'Mật khẩu nhập lại k đúng',
                ]);
                $users->password = bcrypt($request->repass);
            }*/
            if($request->email != '' && $request->email != $users->email) {
                $this->validate($request,[
                    'email' =>  'unique:users,email',
                ],[
                    'email.unique'  =>  'Email này đã được sử dụng',
                ]);
                $users->email = $request->email;
            }
                $users->level = $request->level;
            $users->save();
            return redirect('admin/user/list')->with('sucsses','Đã sửa thành công');
        }else {
            if( Auth::user()->id == 8 || Auth::user()->id == $users->id ) {
                if($request->name != '') {
                    $users->name = $request->name;
                }
                if($request->username != '' && $request->username != $users->username) {
                    $this->validate($request,[
                        'username' =>   'unique:users,username',
                    ],[
                        'username.unique' =>  'Tài khoản này đã tồn tại',
                    ]);
                    $users->username = $request->username;
                }
                $users->DisplayName=$request->DisplayName;
               /* if($request->repass != '') {
                    $this->validate($request,[
                        'pass'          =>  'min:6',
                        'repass'        =>  'same:pass',
                    ],[
                        'pass.min'      =>  'Mật khẩu phải có ít nhất 6 ký tự',
                        'repass.same'   =>  'Mật khẩu nhập lại k đúng',
                    ]);
                    $user->password = bcrypt($request->repass);
                }*/
                if($request->email != '' && $request->email != $users->email) {
                    $this->validate($request,[
                        'email' =>  'unique:users,email',
                    ],[
                        'email.unique'  =>  'Email này đã được sử dụng',
                    ]);
                    $users->email = $request->email;
                }
                if(Auth::user()->id == 1) {
                    $users->level = $request->level;
                }
                $users->save();
                return redirect('admin/user/list')->with('sucsses','Đã sửa thành công');
            }else {
                return redirect()->back()->with('warnning','Bạn không có quyền sửa Super Admin khác!');
            }
        }
    }
    public function Delete($id){
        $user = User::find($id);
        if($user->level == 0) {
            $user->delete();
            return redirect('admin/user/list')->with('sucsses','Đã xóa thành công');
        }else if($user->level == 8){
            if(Auth::user()->id == 8 && $user->id != 8) {
                $user->delete();
                return redirect('admin/user/list')->with('sucsses','Đã xóa thành công');
            }else {
                return redirect()->back()->with('warnning','Không thể xóa Super Admin');
            }
        }

    }

}