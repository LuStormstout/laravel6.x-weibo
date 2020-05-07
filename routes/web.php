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

/**
 * 基础页面
 */
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

/**
 * 用户注册
 */
Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

/**
 * 用户登录退出
 */
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

/**
 * 用户注册激活路由
 */
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

/**
 * 用户修改密码
 */
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

/**
 * 微博发布和删除
 */
Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);

/**
 * 关注着列表和粉丝列表
 */
Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');
Route::get('/users/{user}/follows', 'UsersController@followers')->name('users.followers');

/**
 * 关注和取消关注
 */
Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');
Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');
