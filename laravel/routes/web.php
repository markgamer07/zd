<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
		return 'главная страница сайта';
	});
Route::get('/task1', [UserController::class, 'task1']);
Route::get('/task2', [UserController::class, 'task2']);
Route::get('/task3', [UserController::class, 'task3']);
Route::get('/task4', [UserController::class, 'task4']);
Route::get('/task5', [UserController::class, 'task5']);
Route::get('/task6', [UserController::class, 'task6']);
