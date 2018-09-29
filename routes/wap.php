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


        Route::group(['as'=>'front','prefix'=>'wap'],function (){
            Route::get('/','WapController@index');

            Route::get('about','WapController@about');
            Route::get('about/culture','WapController@culture');
            Route::get('about/honor','WapController@honor');
            Route::get('about/env','WapController@envs');

            Route::get('item','WapController@items');
            Route::get('item/{id}','WapController@items');
            Route::get('item/detail/{id}','WapController@item_detail');
            Route::get('item_news/{id}','WapController@item_news');

            Route::get('team','WapController@team');
            Route::get('team/{id}','WapController@team_detail');

            Route::get('teacher','WapController@team');
            Route::get('team/{id}','WapController@team_detail');
            Route::get('tcompus/{id}','WapController@team_compus');

            Route::get('equip','WapController@equipment');
            Route::get('equip/{id}','WapController@equipment_detail');

            Route::get('star','WapController@star');
            Route::get('star/{id}','WapController@star_dedail');

            Route::get('work','WapController@work');
            Route::get('work/{id}','WapController@work_dedail');

            Route::get('news','WapController@news');
            Route::get('news/{id}','WapController@new_detail');

            Route::get('case','WapController@our_case');
            Route::get('case/category/{id}','WapController@our_case');
            Route::get('case/{id}','WapController@case_detail');

            Route::get('active','WapController@active_list');
            Route::get('active/{id}','WapController@active_dedail');

            Route::get('about','WapController@about');
            Route::get('culture','WapController@culture');
            Route::get('video','WapController@video');
            Route::get('video/{id}','WapController@video_detail');
            Route::get('compus','WapController@compus');
            Route::get('compus/{id}','WapController@compus');
            Route::get('honor','WapController@honor');
            Route::get('honor/{id}','WapController@honor_detail');


            Route::get('contact','WapController@contact');
            Route::get('order','WapController@message');

        });

    });


});



