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

Route::get('/', 'HouseController@index')->middleware('auth');
Route::get('add', 'HouseController@add')->name('house_add');
Route::post('add', 'HouseController@create');
Route::get('edit', 'HouseController@edit')->name('house_edit');
Route::post('edit', 'HouseController@update');
Route::get('del', 'HouseController@delete')->name('house_del');
Route::post('del', 'HouseController@remove');
Route::auth();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('github', 'Github\GithubController@top');
Route::post('github/issue', 'Github\GithubController@createIssue');
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');
