<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\excelController;
use App\Http\Controllers\MailController;


Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
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

// viewsalesandmarketing - by 20----------------------------------------------------------------------
Route::post('/viewsalesandmarketingbytop20','App\http\controllers\PageController@viewsalesandmarketingbytop20');
Route::get('/viewsalesandmarketingbytop20','App\http\controllers\PageController@viewsalesandmarketingbytop20');
//----------------------------------------------------------------------------------------------------

// viewsalesandmarketing - emp status-----------------------------------------------------------------
Route::post('/viewsalesandmarketingbyempstatus','App\http\controllers\PageController@viewsalesandmarketingbyempstatus');
Route::get('/viewsalesandmarketingbyempstatus','App\http\controllers\PageController@viewsalesandmarketingbyempstatus');
//----------------------------------------------------------------------------------------------------

// viewsalesandmarketing - emp department ------------------------------------------------------------
Route::post('/viewsalesandmarketingbyempdepartment','App\http\controllers\PageController@viewsalesandmarketingbyempdepartment');
Route::get('/viewsalesandmarketingbyempdepartment','App\http\controllers\PageController@viewsalesandmarketingbyempdepartment');
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

// create  downloadtopsellingproductspdf------------------------------------------------------------
Route::post('/downloadtopsellingproductspdf','App\http\controllers\PdfController@downloadtopsellingproductspdf');
//----------------------------------------------------------------------------------------------------

// create  downloadtopsellingproductsexcel------------------------------------------------------------
Route::post('/downloadtopsellingproductsexcel','App\http\controllers\excelController@downloadtopsellingproductsexcel');
//----------------------------------------------------------------------------------------------------

// create  download20topsellingproductsexcel------------------------------------------------------------
Route::post('/download20topsellingproductsexcel','App\http\controllers\excelController@download20topsellingproductsexcel');
//----------------------------------------------------------------------------------------------------


// create  downloadbestsalesexecetivespdf-------------------------------------------------------------
Route::post('/downloadbestsalesexecetivespdf','App\http\controllers\PdfController@bestSalesExecetives');
//----------------------------------------------------------------------------------------------------

// create  best sales excetives by sold quantity------------------------------------------------------
Route::post('/download/excel/bestsalesexecetives/bysoldquantity','App\http\controllers\excelController@bestsalesexcetivesbysoldquantity');
//----------------------------------------------------------------------------------------------------

// create  best sales excetives by status-------------------------------------------------------------
Route::post('/download/excel/bestsalesexecetives/bystatus','App\http\controllers\excelController@bestsalesexcetivesbystatus');
//----------------------------------------------------------------------------------------------------

// create  best sales excetives by department---------------------------------------------------------
Route::post('/download/excel/bestsalesexecetives/bydepartment','App\http\controllers\excelController@bestsalesexcetivesbydepartment');
//----------------------------------------------------------------------------------------------------

// view finance ------------------------------------------------------------------------------------
Route::post('/viewfinance','App\http\controllers\PageController@viewfinance');
Route::get('/viewfinance','App\http\controllers\PageController@viewfinance');
//----------------------------------------------------------------------------------------------------


// view purchasing -----------------------------------------------------------------------------------
Route::post('/viewpurchasing','App\http\controllers\PageController@viewpurchasing');
Route::get('/viewpurchasing','App\http\controllers\PageController@viewpurchasing');
//----------------------------------------------------------------------------------------------------

// send purchasing order mail-------------------------------------------------------------------------
Route::post('/send/mail/purchasingorder/{matid}/{supid}/{username}','App\http\controllers\MailController@sendpurchasingorder');
Route::get('/send/mail/purchasingorder/{matid}/{supid}/{username}','App\http\controllers\MailController@sendpurchasingorder');
//----------------------------------------------------------------------------------------------------