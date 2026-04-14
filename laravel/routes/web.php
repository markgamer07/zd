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

Route::get('/', function () {
		return 'главная страница сайта';
	});
Route::get('/posts', function () {
		return 'список постов';
	});
Route::get('/test', function () {
    return 'test message';
});

Route::get('/dir/test', function () {
    return 'dir test message';
});

Route::get('/user/{name}', function ($name) {
    return 'User: ' . $name;
});
Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return $surname . ' ' . $name;
});

Route::get('/city/{city?}', function ($city = 'omsk') {
    return 'City: ' . $city;
});

// 6 + 13 (сразу с исправлением конфликта)
Route::get('/user/all', function () {
    return 'all';
});
Route::get('/posts/{date}', function ($date) {
    return $date;
})->where('date', '\d{4}-\d{2}-\d{2}');

Route::get('/users/{order}', function ($order) {
    return $order;
})->where('order', 'name|surname|age');

Route::get('/city/{name}', function ($name) {
    return $name;
})->where('name');

Route::get('/user/slug/{slug}', function ($slug) {
    return 'slug';
})->where('slug', '[a-z0-9_-]+');
Route::get('/user/profile', function () {
    return 'profile';
})->name('user.profile');

