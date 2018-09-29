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

    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::put('/admin', 'HomeController@update')->middleware('auth');
    Route::get('/admin/setting', 'HomeController@setting'); //网站设置
    Route::put('/admin/setting', 'HomeController@do_setting');//网站设置


    Route::group(['middleware'=>'auth','namespace'=>'Admin','prefix'=>'admin'],function (){
        Route::resource('article','ArticleController');
        Route::resource('team','TeamController');
        Route::resource('message','MessageController');
        Route::resource('car','CarController');
        Route::resource('order_list','Order_listController');


        Route::get('/team/{id}/delete','TeamController@destroy');
        Route::get('/up_password','UserController@up_password');
        Route::post('/up_password','UserController@do_up_password');

    });

    Route::group(['middleware'=>'auth','namespace'=>'Admin'],function (){
        Route::get('article/add_son/{id}','ArticleController@add_son');
        Route::get('article/{id}/look','ArticleController@look_son');
        Route::get('article/{id}/addson','ArticleController@add_son');
        Route::get('article/{id}/delete','ArticleController@delete_son');
        Route::post('article/add_son/{id}','ArticleController@store_son');

        Route::get('/admin/message/{id}/look','MessageController@show');
        Route::get('/admin/message/{id}/delete','MessageController@destroy');

        Route::get('/admin/car/{id}/delete','CarController@destroy');
        Route::get('/admin/order_list/{id}/delete','Order_listController@destroy');
    });

});


Route::get('/admin/logout', 'HomeController@logout');
Route::any('/register', 'HomeController@register');



