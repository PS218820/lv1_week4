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
    return view('welcome');
});

Route::get('/songs', function () {
    return view('Index');
});

Route::get('/songs/{song}',[SongController::class, 'show']

Route::get('/songs/create', function () {
    return view('Create');
});

Route::get('/songs/{index}/edit', function () {
    return view('Edit');
});
