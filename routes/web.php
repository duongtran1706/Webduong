<?php
Route::namespace('user')->middleware('auth')->group(function (){
    Route::get('/',['as'=>'home','uses'=>'layoutController@home']);
    Route::get('user-login',['as'=>'getlogin','uses'=>'LoginController@GetLogin']);
    Route::post('user-login',['as'=>'getlogin','uses'=>'LoginController@PostLogin']);
    Route::post('user-logout',['as'=>'getlogout','uses'=>'LoginController@getlogout']);
    Route::get('Register',['as'=>'Register','uses'=>'RegisterController@getRegister']);
    Route::post('Register',['as'=>'Register','uses'=>'RegisterController@postRegister']);
    Route::get('profile',['as'=>'profile','uses'=>'userController@getprofile']);
    Route::get('edit_user_profile',['as'=>'edit_user_profile','uses'=>'userController@geteditprofile_info']);
    Route::post('edit_user_profile',['as'=>'edit_user_profile','uses'=>'userController@posteditprofile_info']);
    Route::get('changepassword',['as'=>'changepassword','uses'=>'userController@getChangePassword']);
    Route::post('changepassword','userController@postChangePassword');
    /*get post*/
    Route::prefix('post')->group(function (){
    Route::get('/{name}',['as'=>'getpostlist','uses'=>'Topic_Controller@GetTopicchild']);

    });

});

Route::namespace('admin')->group(function (){
    Route::get('MarkAllSeen' ,'postAdmin_controller@AllSeen');
    //App\Http\Controller\admin namespace;
    Route::get('ad-Login','LoginController@getLogin');
    Route::post('ad-Login','LoginController@postLogin');
    Route::get('ad-Logout',['as'=>'Logout','uses'=>'LoginController@getLogout']);
    Route::prefix('admin')->middleware('auth')->group(function (){
        Route::get('/',['uses'=>'DashboardController@index']);
        /*route category */
        Route::prefix('category')->middleware('superadmin')->group(function (){
            Route::get('list',['as'=>'catelist','uses'=>'category_adminController@GetList']);
            Route::get('add',['as'=>'addcate','uses'=>'category_adminController@GetAdd']);
            Route::post('add','category_adminController@PostAdd');
            Route::get('edit/{id}','category_adminController@GetEdit');
            Route::post('edit/{id}','category_adminController@PostEdit');
            Route::get('delete/{id}','category_adminController@Delete');
        });
        /*route topic*/
        Route::prefix('topic')->middleware('superadmin')->group(function (){
            Route::get('list',['as'=>'topiclist','uses'=>'Topic_AdminController@GetList']);
            Route::get('add',['as'=>'addtopic','uses'=>'Topic_AdminController@GetAdd']);
            Route::post('add','Topic_AdminController@PostAdd');
            Route::get('edit/{id}','Topic_AdminController@GetEdit');
            Route::post('edit/{id}','Topic_AdminController@PostEdit');
            Route::get('delete/{id}','Topic_AdminController@Delete');

        });
        /*route topic child*/
 /*       Route::prefix('topicchild')->middleware('superadmin')->group(function (){
            Route::get('{id}-{name}/list',['as'=>'topicchildlist','uses'=>'Topic_AdminController@GetListChild']);

        });*/

        Route::prefix('topicchild')->middleware('superadmin')->group(function (){
            Route::get('{name}/list',['as'=>'topicchildlist','uses'=>'Topic_AdminController@GetListChild']);
            Route::get('{id}-{name}/add',['as'=>'addtopicchild','uses'=>'Topic_AdminController@GetAddChild']);
            Route::post('{id}-{name}/add','Topic_AdminController@PostAddChild');
            Route::get('{name}/edit/{id}','Topic_AdminController@GetEditChild');
            Route::post('{name}/edit/{id}','Topic_AdminController@PostEditChild');
            Route::get('delete/{id}','Topic_AdminController@DeleteChild');

        });
        /*user */
        Route::prefix('user')->middleware('superadmin')->group(function (){
            Route::get('list',['as'=>'userlist','uses'=>'userController@GetList']);
            Route::get('add',['as'=>'useradd','uses'=>'userController@GetAdd']);
            Route::post('add','userController@PostAdd');
            Route::get('edit/{id}','userController@GetEdit');
            Route::post('edit/{id}','userController@PostEdit');
            Route::get('delete/{id}','userController@Delete');
        });


        Route::prefix('post')->middleware('superadmin')->group(function (){
            Route::get('{name}/list',['as'=>'postlist','uses'=>'postAdmin_controller@GetList']);
            Route::get('{name}/edit/{id}','postAdmin_controller@GetEdit');
            Route::post('{name}/edit/{id}','postAdmin_controller@PostEdit');
            Route::get('{name}/delete/{id}','postAdmin_controller@Delete');
            Route::get('{id}-{name}/add',['as'=>'addpost','uses'=>'postAdmin_controller@GetAdd']);
            Route::post('{id}{name}/add','postAdmin_controller@PostAdd');
            Route::get('{name}/detail/{id}',['as'=>'detailpost','uses'=>'postAdmin_controller@detail']);
            Route::get('/detail/{id}',['as'=>'postdetail','uses'=>'postAdmin_controller@detailnotification']);

        });
/*route manager */
    });
 /*   Route::prefix('manager')->middleware('auth')->group(function (){
        Route::get('{token}',['uses'=>'DashboardController@index']);
    });*/
    Route::get('manager/{token}',['as'=>'manager','uses'=>'DashboardController@index']);

});

Route::get('webcome',function (){
        return view('welcome');
});
use App\Topic;
Route::get('demo',function (){
    $topic=Topic::find(7);
    $cateparent=Topic::where('id','=',$topic->parent_id)->get();
    $temp= $cateparent.name;
    return $temp;
});