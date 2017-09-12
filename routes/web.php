<?php
Route::namespace('user')->group(function (){
    Route::get('/',['as'=>'home','uses'=>'layoutController@home']);

});
Route::namespace('admin')->group(function (){
    //App\Http\Controller\admin namespace;
    Route::get('Login','LoginController@getLogin');
    Route::post('Login','LoginController@postLogin');
    Route::get('Logout',['as'=>'Logout','uses'=>'LoginController@getLogout']);
    Route::prefix('admin')->middleware('auth')->group(function (){
        Route::get('/',['uses'=>'Admin_Controller@index']);
        /*route category */
        Route::prefix('category')->middleware('superadmin')->group(function (){
            Route::get('list',['as'=>'catelist','uses'=>'category_adminController@GetList']);
            Route::get('add',['as'=>'addcate','uses'=>'category_adminController@GetAdd']);
            Route::post('add','category_adminController@GetAdd');
            Route::get('edit/{id}','category_adminController@GetEdit');
            Route::post('edit/{id}','category_adminController@PostEdit');
            Route::get('delete/{id}','category_adminController@Delete');
        });
        /*route topic*/
        Route::prefix('topic')->middleware('superadmin')->group(function (){
            Route::get('list',['as'=>'topiclist','uses'=>'Topic_AdminController@GetList']);
            Route::get('add',['as'=>'addtopic','uses'=>'Topic_AdminController@GetAdd']);
            Route::post('add','Topic_AdminController@GetAdd');
            Route::get('edit/{id}','Topic_AdminController@GetEdit');
            Route::post('edit/{id}','Topic_AdminController@PostEdit');
            Route::get('delete/{id}','Topic_AdminController@Delete');

        });
//        Route::prefix('post')->middleware('superadmin')->group(function (){
//            /*font end*/
//            Route::prefix('FontEnd')->middleware('superadmin')->group(function (){
//               Route::get('list',['as'=>'FontEnd.html_css','uses'=>'FontEndController@GetList']);
//
//                Route::get('list',['as'=>'FontEnd.html_css','uses'=>'FontEndController@GetList']);
//            });
//            /*back end*/
//            Route::prefix('BackEnd')->middleware('superadmin')->group(function (){
//                Route::get('list',['as'=>'BackEnd.html_css','uses'=>'FontEndController@GetList']);
//            });
//            /*database*/
//            Route::prefix('DataBase')->middleware('superadmin')->group(function (){
//                Route::get('list',['as'=>'BackEnd.html_css','uses'=>'FontEndController@GetList']);
//            });
//
//            Route::prefix('Android')->middleware('superadmin')->group(function (){
//                Route::get('list',['as'=>'BackEnd.html_css','uses'=>'FontEndController@GetList']);
//            });
//
//            Route::prefix('IOS')->middleware('superadmin')->group(function (){
//                Route::get('list',['as'=>'BackEnd.html_css','uses'=>'FontEndController@GetList']);
//            });
//
//            Route::prefix('Congnghekhac')->middleware('superadmin')->group(function (){
//                Route::get('list',['as'=>'BackEnd.html_css','uses'=>'FontEndController@GetList']);
//            });
//        });
        Route::prefix('post')->middleware('superadmin')->group(function (){
            Route::get('{name}/list',['as'=>'postlist','uses'=>'postAdmin_controller@GetList']);
            Route::get('{name}/edit/{id}','postAdmin_controller@GetEdit');
            Route::post('{name}/edit/{id}','postAdmin_controller@PostEdit');

        });
    });

});

Route::get('demo',function (){
    $temp1=DB::table('topic')->join('post','post.topic_id','=','topic.id')->select('topic.namedescript')->where('post.id','=',33)->value('namedescript');
    return $temp1;
});