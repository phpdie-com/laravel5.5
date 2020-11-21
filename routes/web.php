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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
//演示获取目录路径
Route::get('/path', 'PathController@index');

Route::resource('test', 'TestController', ['names' => [
    'index'   => 'test.index',
    // 'create'  => 'test.create',
    // 'store'   => 'test.store',
    // 'show'    => 'test.show',
    // 'edit'    => 'test.edit',
    // 'update'  => 'test.update',
    // 'destroy' => 'test.destroy'
]]);