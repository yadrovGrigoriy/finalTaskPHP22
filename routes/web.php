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


Route::get('/', 'QuestionsController@index');

Auth::routes();
  Route::group(['middleware' => 'auth'], function() {

      Route::get('/home', 'HomeController@index');

      Route::get('/questions/create', 'QuestionsController@create');

      Route::post('/questions/store', 'QuestionsController@store');

      Route::get('/question/{question}/edit', 'QuestionsController@edit');

      Route::patch('/questions/{question}', 'QuestionsController@update');

      Route::delete('/questions/{question}', 'QuestionsController@destroy');

      });






