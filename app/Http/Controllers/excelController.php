<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Models\sale;
use App\Exports\SellingProductsExport;
use App\Exports\Selling20ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

class excelController extends Controller
{
    public function downloadtopsellingproductsexcel(){
        return Excel::download(new SellingProductsExport, 'Top 10 Selling Products.xlsx');
    }
    public function download20topsellingproductsexcel(){
        return Excel::download(new Selling20ProductsExport, 'Top 20 Selling Products.xlsx');
    }

}
