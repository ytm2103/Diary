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
Route::get('/', 'DiaryController@index')->name('diary.index'); //追加
// 削除
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('diary/create', 'DiaryController@create')->name('diary.create'); // 投稿画面
Route::post('diary/create', 'DiaryController@store')->name('diary.create'); // 保存処理