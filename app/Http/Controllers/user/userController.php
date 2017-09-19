<?php

namespace App\Http\Controllers\user;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Hash;
use PhpParser\Node\Stmt\Return_;

class userController extends Controller
{
    public function __construct()
    {
        $category=Category::all();
        return view()->share('category',$category);
    }

    public function getprofile(){
        return view('Manager.profile');
    }

    public  function geteditprofile_info(){
        $users = User::find(Auth::user()->id);
            return view('Manager.user_edit_info',['users'=>$users]);
    }
    public  function posteditprofile_info(Request $request){
        $users = User::find(Auth::user()->id);
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
            $users->biography = $request->biography;
            $users->save();
            return redirect('profile')->with('sucsses','Đã sửa thành công');
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
                $users->biography = $request->biography;
                $users->save();
                return redirect('profile')->with('sucsses','Đã sửa thành công');
            }else {
                return redirect()->back()->with('warnning','Bạn không có quyền sửa Super Admin khác!');
            }
        }
    }
    public function getChangePassword() {
        return view('Admin.Modules.Users.changepassword');
    }

    public function postChangePassword(Request $request) {
        $user = User::find(Auth::user()->id);
        $this->validate($request,[
            'oldpass' => 'required',
        ],[
            'oldpass.required' => 'Bạn chưa nhập mật khẩu cũ',
        ]);
        if( Hash::check( $request->oldpass,$user->password ) )
        {
            if($request->newpass != '' && $request->repass != '') {
                $this->validate($request,[
                    'newpass' => 'min:6',
                    'repass' => 'same:newpass',
                ],[
                    'newpass.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
                    'repass.same' => 'Mật khẩu nhập lại không chính xác',
                ]);
                $user->password = bcrypt($request->repass);
            }
            $user->save();
            return redirect('manager')->with('sucsses','Cập nhật thông tin thành công');
        }else{
            return redirect()->back()->with('warning','Mật khẩu cũ không chính xác');
        }
    }
}
