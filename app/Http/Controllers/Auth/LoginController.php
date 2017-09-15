<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function GetLogin(){
        if(!Auth::check()){
            return view('Admin.Modules.Login.Login');
        }else{
            return redirect('admin');
        }
    }
    public function PostLogin(Request $request){
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
            return redirect('/admin');
        }else {
            return redirect()->back()->with('warning','Sai tên đăng nhập hoặc mật khẩu');
        }
    }
    public function getLogout() {
        Auth::logout();
        return redirect('login');
    }
}
