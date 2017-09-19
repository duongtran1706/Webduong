<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Add_User_Notification;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    public function getRegister(){
        return view('Admin.Modules.Login.Register');
    }
    public  function postRegister(RegisterRequest $request){
        $user= new User();
        $user->name=$request->name;
        $user->DisplayName=$request->name;
        $user->Avatar="/public/images/Avatar/user.png";
        $user->email= $request->email;
        $user->Birthday=$request->Birthday;
        $user->username=$request->username;
        $user->password=bcrypt($request->password);
        $user->level=0;
        $user->biography=null;
        $user->remember_token= str_random(100);
        $user->timestamps;
        if($user->save()){
            $usernotifi=User::where('level','=',1)->get();
            /*$user=DB::table('users')->select('users.*')->where('level','=',1)->orwhere('id','=',Auth::user()->id)->get();*/
            $date=getdate();
            $string= $date['weekday']." ".$date['mday']."/".$date['mon']."/".$date['year']." ".$date['hours'].":".$date['minutes'].":".$date['seconds'];
            $data='
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>'.$user->name.'</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> '.$string.'</p>
                                    <p>Vừa Tạo tài khoản trên web của bạn</p>
                              
                                </div>
                            </div>
                        ';
            Notification::send($usernotifi, new Add_User_Notification($user,$data));
        }
        return redirect('/')->with('sucsses','Đã Đăng ký thành công');
    }
}
