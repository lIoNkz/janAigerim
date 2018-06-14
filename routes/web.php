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

Route::get('/', function () {
	return view('frontend.index');
});

Route::get('/goods', function () {
	return view('frontend.goods');
});

Route::get('/company', function () {
	return view('frontend.company');
});

Route::get('/contacts', function () {
	return view('frontend.contacts');
});

Route::get('/delivery', function () {
	return view('frontend.delivery');
});

Route::get('/garanty', function () {
	return view('frontend.garanty');
});

Route::get('/sales', function () {
	return view('frontend.sales');
});

Route::get('/cart', function () {
	return view('frontend.cart');
});

Route::get('/recommend', function () {
	return view('frontend.recommend');
});

Route::get('/chosen', function () {
	return view('frontend.chosen');
});

Route::get('/{category}/{subcategory}', 'FrontendController@show_category');