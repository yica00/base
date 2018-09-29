<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['middleware'=>'check_setting'],function (){


    Route::group(['middleware'=>'get_nav'],function (){

        Route::get('/','FrontController@index');

        Route::get('about','FrontController@about');
        Route::get('about/category/{id}','FrontController@about');
        Route::get('about/culture','FrontController@culture');
        Route::get('about/maind','FrontController@maind');
        Route::get('about/history','FrontController@history');
        Route::get('about/team','FrontController@team');
        Route::get('about/brand','FrontController@brand');
        Route::get('about/video','FrontController@video');
        Route::get('about/video/{id}','FrontController@video_detail');
        Route::get('about/honor','FrontController@honor');
        Route::get('about/env','FrontController@env');
        Route::get('about/student','FrontController@student');
        Route::get('about/student/{id}','FrontController@student_detail');

        Route::get('news','FrontController@news');
        Route::get('news/category/{id}','FrontController@news');
        Route::get('news/{id}','FrontController@new_detail');

        Route::get('treatment','FrontController@treatment');

        Route::get('menu','FrontController@menu_list');

        Route::get('store','FrontController@store_list');
        Route::get('store/{id}','FrontController@store_dedail');



        Route::get('environment','FrontController@environment');
        Route::get('environment/category/{id}','FrontController@environment');
        Route::get('environment/{id}','FrontController@environment_detail');

        Route::get('join','FrontController@join_detail');
        Route::get('join/category/{id}','FrontController@join_detail');
        Route::get('join/suply','FrontController@join_suply');


        Route::get('case','FrontController@our_case');
        Route::get('case/category/{id}','FrontController@our_case');
        Route::get('case/{id}','FrontController@case_detail');


        Route::get('cases','FrontController@our_case');
        Route::get('cases/category/{id}','FrontController@our_case');
        Route::get('case/{id}','FrontController@case_detail');




        Route::get('contact','FrontController@contact');
        Route::get('order','FrontController@message');

        Route::post('/front/message','Admin\MessageController@store');
        Route::any('/search','FrontController@search');

    });

});



//微信
Route::any('/wechat', 'WechatController@serve');
Route::group(['middleware' => ['web', 'wechat.oauth']], function () {
    Route::get('/user', function () {
        $user = session('wechat.oauth_user.default'); // 拿到授权用户资料
        dd($user);
    });
});

Route::get('/aa', function () {
    return view('front.ask_create');
});

Route::get('/vaptcha',function (){
    return getCaptcha(4);
    //    return session('captcha');
});


