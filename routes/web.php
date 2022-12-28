<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;

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

Route::get('/login', function () {
    return view('login');
});

// sign in -------------------------------------------------------------------------------------------
Route::post('/checklogin','App\http\controllers\LoginController@checkLogin');
//----------------------------------------------------------------------------------------------------

Route::get('/hr', function () {
    return view('hrview');
});
// view hr -------------------------------------------------------------------------------------------
Route::post('/hr/{username}','App\http\controllers\PageController@viewHr');
Route::get('/hr/{username}','App\http\controllers\PageController@viewHr');
//----------------------------------------------------------------------------------------------------

Route::get('/t', function () {
    return view('test');
});

// view dashboard ------------------------------------------------------------------------------------
Route::post('/dashboard/{username}','App\http\controllers\PageController@viewDashboard');
Route::get('/dashboard/{username}','App\http\controllers\PageController@viewDashboard');
//----------------------------------------------------------------------------------------------------