<?php
/**
 * Created by PhpStorm.
 * User: DuongTran
 * Date: 9/13/2017
 * Time: 1:25 AM
 */

namespace App\Http\Controllers\admin;
use App\Category;
use App\post;
use  App\Topic;
use  App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $category = Category::all();
        $topic= Topic::all();
        $post= post::all();
        $user= User::all();
        return view()->share(['category'=>$category,'topic'=>$topic,'user'=>$user,'post'=>$post]);
    }

    public function index()
    {
        if(Auth::user()->level==1) {
            return view("Admin.Modules.Dardboard.Admin");
        }else{
            return view('Admin.Modules.Dardboard.manager');
        }
    }

}