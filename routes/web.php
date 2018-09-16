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

// Route::get('/', function () {
//     return view('welcome');
// });
	
	Route::get('',function(){
		return view('layouts.master');
	});

	Route::get('/','BlogController@index');\

	// Route::get('/tag/{id}',function($id){
	// 	$tag = \App\Tag::find($id);
	// 	return view('tag',compact('tag'));
	// });

	// Route::get('/{id}',function($id){
	// 	$category = \App\Category::find($id);
	// 	return view('category',compact('category'));
	// });

	// Route::get('blog/{slug}','BlogController@detail');

	// Route::get('category/{slug}','BlogController@category');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
