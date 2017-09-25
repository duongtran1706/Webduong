<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/13/2017
 * Time: 1:25 AM
 */

namespace App\Http\Controllers\admin;
use App\post;
use  App\Topic;
use  App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
class DashboardController extends Controller
{
    public function __construct()
    {
        $category = Topic::where('parent_id','=',null)->get();
        $topic= Topic::all();
        $post= post::all();
        $user= User::all();
        return view()->share(['category'=>$category,'topic'=>$topic,'user'=>$user,'post'=>$post]);
    }

    public function index()
    {
        $views= DB::table('post')->orderBy('views','DESC')->take(5)->get();
        /*take 5 Most views in post*/
        if(Auth::user()->level==1) {
            return view("Admin.Modules.Dardboard.Admin",['views'=>$views]);
        }else{
            return view('Admin.Modules.Dardboard.manager',['views'=>$views]);
        }
    }

}