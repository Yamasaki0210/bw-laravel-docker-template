<?php
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|s
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 追加
Route::get('/todo', function () {
    echo 'Hello World!';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [TodoController::class, 'index']);

Route::get('/todo', 'TodoController@index');

Route::get('/todo/create', 'TodoController@create'); // 追記
