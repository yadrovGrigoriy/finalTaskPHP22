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





  Auth::routes();
  Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index');
    Route::resource('/admin/questions', 'AdminQuestionsController');
    Route::resource('/admin/questions/store', 'AdminQuestionsController');
    //Route::resource('/admin/questions/{question}/edit/', 'AdminQuestionsController');
    Route::get('admin/questions/{question}/edit', 'AdminQuestionsController@edit');
    Route::patch('admin/questions/{$question}', 'AdminQuestionsController@update');
    // Route::resource('/admin/questions/{question}', 'AdminQuestionsController');
    Route::delete('admin/questions/{question}', 'AdminQuestionsController@destroy');
    route::resource('category', 'CategoryController');
  });
//    Route::get('/', 'QuestionsController@index');
//    Route::get('/questions/create', 'QuestionsController@create');
//    Route::post('/questions/store', 'QuestionsController@store');
//    Route::get('/question/{question}/edit', 'QuestionsController@edit');
//    Route::patch('/questions/{question}', 'QuestionsController@update');
//    Route::delete('/questions/{question}', 'QuestionsController@destroy');
//    Route::get('/{category}', 'CategoryController@index');



  Route::get('/', 'QuestionsController@index');
  Route::get('/questions/create', 'QuestionsController@create');
  Route::post('/questions/store', 'QuestionsController@store');


