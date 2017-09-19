<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        if(!Auth::check()){
            return view('Admin.Modules.Login.Login');
        }else{
            return redirect('/');
        }
    }
    public function PostLogin(LoginRequest $request){
    $login=array(
        'username'=>$request->username,
        'password'=>$request->password,
    );
    if(Auth::attempt($login)){
        return redirect('/');
    }else {
        return redirect()->route('getlogin')->with('warning','Sai tên đăng nhập hoặc mật khẩu');
    }
}
    public function getlogout() {
    Auth::logout();
    return redirect('/');
}

}
