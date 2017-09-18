<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use App\User;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/
    public function PostLogin(LoginRequest $request){
        $login=array(
            'username'=>$request->username,
            'password'=>$request->password,
        );
        if($this->auth->attempt($login)){
            return redirect('/');
        }else {
            return redirect()->back()->with('warning','Sai tên đăng nhập hoặc mật khẩu');
        }
    }
    public function getLogout() {
        Auth::logout();
        return redirect('/');
    }
}
