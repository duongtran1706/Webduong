<?php

Route::namespace('user')->group(function (){
    Route::get('/',['as'=>'home','uses'=>'layoutController@home']);

});
Auth::routes();
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
            Route::get('{name}/add',['as'=>'addpost','uses'=>'postAdmin_controller@GetAdd']);
            Route::post('{name}/add','postAdmin_controller@PostAdd');

        });
/*route manager */
        Route::prefix('post')->middleware('manager')->group(function (){
            Route::get('{name}/list',['as'=>'postlist','uses'=>'postAdmin_controller@GetList']);
            Route::get('{name}/edit/{id}','postAdmin_controller@GetEdit');
            Route::post('{name}/edit/{id}','postAdmin_controller@PostEdit');
            Route::get('{name}/delete/{id}','postAdmin_controller@Delete');
            Route::get('{name}/add',['as'=>'addpost','uses'=>'postAdmin_controller@GetAdd']);
            Route::post('{name}/add','postAdmin_controller@PostAdd');

        });
    });

});
/*manager*/
//Route::namespace('Manager')->group(function (){
//    //App\Http\Controller\admin namespace;
//    Route::get('Login','LoginController@getLogin');
//    Route::post('Login','LoginController@postLogin');
//    Route::get('Logout',['as'=>'Logout','uses'=>'LoginController@getLogout']);
//    Route::prefix('admin')->middleware('auth')->group(function (){
//        Route::get('/',['uses'=>'DashboardController@index']);
//        /*user */
//        Route::prefix('user')->middleware('manager')->group(function (){
//            Route::get('list',['as'=>'userlist','uses'=>'userController@GetList']);
//            Route::get('add',['as'=>'useradd','uses'=>'userController@GetAdd']);
//            Route::post('add','userController@PostAdd');
//            Route::get('edit/{id}','userController@GetEdit');
//            Route::post('edit/{id}','userController@PostEdit');
//            Route::get('delete/{id}','userController@Delete');
//        });
//
//        Route::prefix('post')->middleware('manager')->group(function (){
//            Route::get('{name}/list',['as'=>'postlist','uses'=>'postAdmin_controller@GetList']);
//            Route::get('{name}/edit/{id}','postAdmin_controller@GetEdit');
//            Route::post('{name}/edit/{id}','postAdmin_controller@PostEdit');
//            Route::get('{name}/delete/{id}','postAdmin_controller@Delete');
//            Route::get('{name}/add',['as'=>'addpost','uses'=>'postAdmin_controller@GetAdd']);
//            Route::post('{name}/add','postAdmin_controller@PostAdd');
//
//        });
//    });
//
//});
Route::get('demo',function (){
    $post=DB::table('post')->join('topic','topic.id','=','post.topic_id')->join('users','users.id','=','post.user_id')->select('post.*','users.name')->where('topic.namedescript','=','html_css')->where('users.id','=',10)->get();
    return $post;
});
Route::get('webcome',function (){
        return view('welcome');
});

/*Route::get('login','admin/LoginController@getLogin');*/
