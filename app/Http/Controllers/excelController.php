<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Models\sale;
use App\Exports\SellingProductsExport;
use App\Exports\Selling20ProductsExport;
use App\Exports\bestsalesexcetivesbysoldquantity;
use App\Exports\bestsalesexcetivesbystatus;
use App\Exports\bestsalesexcetivesbydepartment;
use App\Exports\material;
use App\Exports\stocks;
use Maatwebsite\Excel\Facades\Excel;

class excelController extends Controller
{
    public function downloadtopsellingproductsexcel(){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Top 10 Selling Products';
        $format = '.xlsx';
        $name = $topic.' ['.$date.' - '.$time.']'.$format;

        return Excel::download(new SellingProductsExport, $name);
    }
    public function download20topsellingproductsexcel(){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Top 20 Selling Products';
        $format = '.xlsx';
        $name = $topic.' ['.$date.' - '.$time.']'.$format;

        return Excel::download(new Selling20ProductsExport, $name);
    }
    public function bestsalesexcetivesbysoldquantity(){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Best Sales Execetives (By Sold Quantity)';
        $format = '.xlsx';
        $name = $topic.' ['.$date.' - '.$time.']'.$format;

        return Excel::download(new bestsalesexcetivesbysoldquantity, $name);
    }
    public function bestsalesexcetivesbystatus(){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Best Sales Execetives (By Status)';
        $format = '.xlsx';
        $name = $topic.' ['.$date.' - '.$time.']'.$format;

        return Excel::download(new bestsalesexcetivesbystatus, $name);
    }
    public function bestsalesexcetivesbydepartment(){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Best Sales Execetives (By Department)';
        $format = '.xlsx';
        $name = $topic.' ['.$date.' - '.$time.']'.$format;

        return Excel::download(new bestsalesexcetivesbydepartment, $name);
    }
    public function downloadmaterialsexcel(Request $request){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Materials (By Id)';
        $createdby = $request->input('created_by');
        $role = $request->input('role');
        $format = '.xlsx';
        $name = $topic.' ('.$createdby.'-'.$role.') ['.$date.' - '.$time.']'.$format;

        return Excel::download(new material, $name);
    }
    public function downloadstocksexcel(Request $request){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Current Stock Levels';
        $createdby = $request->input('created_by');
        $role = $request->input('role');
        $format = '.xlsx';
        $name = $topic.' ('.$createdby.'-'.$role.') ['.$date.' - '.$time.']'.$format;

        return Excel::download(new stocks, $name);
    }
}
