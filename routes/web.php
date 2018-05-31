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
  Route::get('/', 'PagesController@index');
  Auth::routes();

  Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('questions', 'QuestionsController');
    Route::resource('categories', 'CategoriesController');
  });


//  Route::get('/{category}', 'PagesController@category')->name('category');
//  Route::get('/{category}/{post}', 'PagesController@post')->name('post');