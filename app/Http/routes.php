<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',function(){
	return view('welcome');
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::model('orders', 'Order');
Route::model('orderDetail', 'OrderDetail');
Route::model('users', 'User');
Route::model('menus', 'Menu');

Route::resource('orders', 'orderController');
Route::resource('orders.orderDetails', 'orderDetailController');
Route::resource('users', 'userController');
Route::resource('menus', 'menusController');

Route::bind('orders', function($value, $route) {
	return App\Order::whereSlug($value)->first();
});
Route::bind('orderDetail', function($value, $route) {
	return App\OrderDetail::whereSlug($value)->first();
});

Route::get('/home/{menu}', 'menusController@fetchPrice');
Route::get('/orderHistory', 'orderController@index');
Route::post('/orderHistory', 'orderController@saveOrder');
