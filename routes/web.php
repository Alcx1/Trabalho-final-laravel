<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\HTTP\Controllers\Main@home')->name('home');
Route::get('/new_task','App\HTTP\Controllers\Main@new_task')->name('new_task');
Route::get('/task_done/{id}','App\HTTP\Controllers\Main@task_done')->name('task_done');
Route::get('/task_undone/{id}','App\HTTP\Controllers\Main@task_undone')->name('task_undone');
Route::get('/edit_task_frm/{id}', 'App\HTTP\Controllers\Main@edit_task')->name('edit_task');
Route::get('/task_invisible/{id}','App\HTTP\Controllers\Main@task_invisible')->name('task_invisible');
Route::get('/task_visible/{id}','App\HTTP\Controllers\Main@task_visible')->name('task_visible');
Route::get('/list_invisibles','App\HTTP\Controllers\Main@list_invisibles')->name('list_invisibles');
//==============================================================================

Route::post('/new_task_submit', 'App\HTTP\Controllers\Main@new_task_submit')->name('new_task_submit');
Route::post('/edit_task_submit', 'App\HTTP\Controllers\Main@edit_task_submit')->name('edit_task_submit');
