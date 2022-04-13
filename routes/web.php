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

Route::get('/test/level/admin/{page}', function () {
    return view('welcome');
})->name('main');

Route::get('/url', function (){
    return 'Route URL: ' . route('main',['page' =>25]);
});
