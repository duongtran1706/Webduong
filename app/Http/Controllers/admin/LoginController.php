<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Auth;
use App\http\Requests;
use App\Http\Controllers\Controller;
class LoginController extends Controller
{
    //
    public function getLogin(){
        if(!Auth::check()){
            return view('Admin.Modules.Login.Login');
        }else{
            return redirect('admin');
        }
    }
    public function postLogin(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ],[
            'username.required'=>'Vui lòng nhập tên đăng nhập',
            'password.required' =>'Vui lòng nhập mật khẩu',
        ]);
        $login=[
            'username'=>$request->username,
            'password'=>$request->password,
        ];
        if(Auth::attempt($login)){
            return redirect('admin');
        }else {
            return redirect()->back()->with('warning','Sai tên đăng nhập hoặc mật khẩu');
        }
    }
    public function getLogout() {
        Auth::logout();
        return redirect('login');
    }
}
