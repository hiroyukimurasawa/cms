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
use App\Display;
use Illuminate\Http\Request;

/***棚のダッシュボード表示(displays.blade.php)*/
Route::get('/', 'DisplaysController@index');

/*** 新「棚」を追加 */
Route::post('/displays', 'DisplaysController@store');

//更新画面
Route::post('/displaysedit/{displays}', 'DisplaysController@edit');

//更新処理
Route::post('/displays/update', 'DisplaysController@update');

/*** 棚を削除 */
Route::delete('/display/{display}', 'DisplaysController@destroy');

Auth::routes();

Route::get('/home', 'DisplaysController@index')->name('home');
