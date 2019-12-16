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



use Illuminate\Support\Facades\Auth;

Route::get('/','PagesController@getIndex');
Route::get('add-to-cart/{id}', 'PagesController@getAddToCart');
Route::get('all-products','PagesController@getAllProduct');
Route::get('shopping-cart','PagesController@getShoppingCart');
Route::get('clear-shopping-cart','PagesController@getClearCart');
Route::get('reduce/{id}','PagesController@getReduce');
Route::get('remove/{id}','PagesController@getRemove');
Route::get('check-out','PagesController@getCheckOut')->middleware('authuser');
Route::any('get_products','LoadPageController@get_products');
Route::post('storeorder','PagesController@storeOrder');


Route::group(['prefix' => 'user'], function(){
    Route::group(['middleware' => 'guest'], function() {
        Route::get('signup','UserController@getSignUp');
        Route::post('signup','UserController@postSignUp');
        Route::get('signin','UserController@getSignIn')->name('user.signin');
        Route::post('signin','UserController@postSignIn');
    });
    Route::group(['middleware' => 'authuser'], function() {
        Route::get('profile','UserController@profile');
        Route::get('logout','UserController@logout');
    });
});

Route::group(['middleware' => 'auth:admin'],function() {
   Route::resource('categories','CategoryController');
   Route::resource('products','ProductController');
   Route::resource('orders','OrderController');
});


Route::get('admin/home','AdminController@get_home');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::get('admin/logout','Admin\LoginController@logout');

