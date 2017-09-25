<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/13/2017
 * Time: 12:15 PM
 */
namespace App\Http\Middleware;
use Closure;
use Auth;
use App\User;
use App\UserRoles;
use App\Roles;

class manager{
    public function handle($request,Closure $next)
    {
     /*   if(Auth::check()&& Auth::user()->level==0){
            return $next($request);
        }else{
            return redirect()->back()->with('warnning','bạn không có quyền truy cập vào này');
        }*/
    }
}
