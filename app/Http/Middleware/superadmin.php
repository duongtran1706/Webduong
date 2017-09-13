<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 8/30/2017
 * Time: 10:54 AM
 * superadmin change
 */
namespace App\Http\Middleware;
use Closure;
use Auth;
use App\User;
use App\UserRoles;
use App\Roles;

class superadmin{
public function handle($request,Closure $next)
{
     if(Auth::check()&& Auth::user()->level==1){
        return $next($request);
    }else{
        return redirect()->back()->with('warnning','bạn không có quyền truy cập vào này');
    }
    }
}
