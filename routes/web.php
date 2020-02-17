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




Auth::routes();

Route::get('/', 'GatController@index');
Route::get('/learn', 'GatController@learn');
Route::get('/skillsGat', 'GatController@skillsGat');
Route::get('/theory', 'GatController@theory');
Route::get('/technique', 'GatController@technique');
Route::get('/relationship', 'GatController@relationship');
Route::get('/minitest', 'GatController@minitest');
Route::get('/test','TestController@index');

// Route::get('/fulltest', 'GatController@fulltest');
Route::resource('fulltest','FulltestController');
Route::post('/sendAnswer','FulltestController@sendanswer');

//admin
Route::get('/admin','ExamController@admin');
Route::get('/createTest','ExamController@createTest');


Route::post('/saveArticle','ExamController@saveArticle');
