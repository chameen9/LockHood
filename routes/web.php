<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PdfController;


Route::get('/', function () {
    return view('login');
});
Route::get('/test', function () {
    return view('test');
});
// sign in -------------------------------------------------------------------------------------------
Route::post('/checklogin','App\http\controllers\LoginController@checkLogin');
//----------------------------------------------------------------------------------------------------

Route::get('/hr', function () {
    return view('hrview');
});

// view hr -------------------------------------------------------------------------------------------
Route::post('/viewhr','App\http\controllers\PageController@viewHr');
Route::get('/viewhr','App\http\controllers\PageController@viewHr');
//----------------------------------------------------------------------------------------------------

Route::get('/t', function () {
    return view('test');
});

// view dashboard ------------------------------------------------------------------------------------
Route::post('/viewdashboard','App\http\controllers\PageController@viewDashboard');
Route::get('/viewdashboard','App\http\controllers\PageController@viewDashboard');
//----------------------------------------------------------------------------------------------------

// viewsalesandmarketing -----------------------------------------------------------------------------
Route::post('/viewsalesandmarketing','App\http\controllers\PageController@viewSales');
Route::get('/viewsalesandmarketing','App\http\controllers\PageController@viewSales');
//----------------------------------------------------------------------------------------------------

// Finance -------------------------------------------------------------------------------------------
Route::get('/finance', function () {
    return view('finance_view');
});
//----------------------------------------------------------------------------------------------------

// Finance -------------------------------------------------------------------------------------------
Route::get('/404', function () {
    return view('404error');
});
//----------------------------------------------------------------------------------------------------

// create  downloadtop10sellingproductspdf------------------------------------------------------------
Route::post('/downloadtop10sellingproductspdf','App\http\controllers\PdfController@top10selling');
//----------------------------------------------------------------------------------------------------

// create  downloadbestsalesexecetivespdf-------------------------------------------------------------
Route::post('/downloadbestsalesexecetivespdf','App\http\controllers\PdfController@bestSalesExecetives');
//----------------------------------------------------------------------------------------------------