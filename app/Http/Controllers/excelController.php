<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Models\sale;
use App\Models\reportsLog;
use App\Exports\SellingProductsExport;
use App\Exports\Selling20ProductsExport;
use App\Exports\bestsalesexcetivesbysoldquantity;
use App\Exports\bestsalesexcetivesbystatus;
use App\Exports\bestsalesexcetivesbydepartment;
use App\Exports\material;
use App\Exports\stocks;
use App\Exports\suppliers;
use App\Exports\income;
use Maatwebsite\Excel\Facades\Excel;

class excelController extends Controller
{
    public function downloadtopsellingproductsexcel(Request $request){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Top 10 Selling Products';
        $format = '.xlsx';
        $name = $topic.' ['.$date.' - '.$time.']'.$format;

        $username = $request->input('created_by');
        $role = $request->input('role');
        $top10ProductFilterstaus = $request->input('top10ProductFilterstaus');

        $userid = DB::Table('user_accounts')->where('user_name',$username)->value('id');
        $report = new reportsLog;
        $report->report_name = $topic;
        $report->report_status = $top10ProductFilterstaus;
        $report->type = 'excel';
        $report->created_by = $username;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();
        
        return Excel::download(new SellingProductsExport, $name);
    }
    public function download20topsellingproductsexcel(Request $request){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Top 20 Selling Products';
        $format = '.xlsx';
        $name = $topic.' ['.$date.' - '.$time.']'.$format;

        $username = $request->input('created_by');
        $role = $request->input('role');
        $top10ProductFilterstaus = $request->input('top10ProductFilterstaus');

        $userid = DB::Table('user_accounts')->where('user_name',$username)->value('id');
        $report = new reportsLog;
        $report->report_name = $topic;
        $report->report_status = $top10ProductFilterstaus;
        $report->type = 'excel';
        $report->created_by = $username;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

        return Excel::download(new Selling20ProductsExport, $name);
    }
    public function bestsalesexcetivesbysoldquantity(Request $request){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Best Sales Execetives (By Sold Quantity)';
        $format = '.xlsx';
        $name = $topic.' ['.$date.' - '.$time.']'.$format;

        $username = $request->input('created_by');
        $role = $request->input('role');
        $reportsstat = $request->input('BeastSalesExecetivesFilterstaus');

        $userid = DB::Table('user_accounts')->where('user_name',$username)->value('id');
        $report = new reportsLog;
        $report->report_name = 'Best Sales Execetives';
        $report->report_status = $reportsstat;
        $report->type = 'excel';
        $report->created_by = $username;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

        return Excel::download(new bestsalesexcetivesbysoldquantity, $name);
    }
    public function bestsalesexcetivesbystatus(Request $request){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Best Sales Execetives (By Status)';
        $format = '.xlsx';
        $name = $topic.' ['.$date.' - '.$time.']'.$format;

        $username = $request->input('created_by');
        $role = $request->input('role');
        $reportsstat = $request->input('BeastSalesExecetivesFilterstaus');

        $userid = DB::Table('user_accounts')->where('user_name',$username)->value('id');
        $report = new reportsLog;
        $report->report_name = 'Best Sales Execetives';
        $report->report_status = $reportsstat;
        $report->type = 'excel';
        $report->created_by = $username;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

        return Excel::download(new bestsalesexcetivesbystatus, $name);
    }
    public function bestsalesexcetivesbydepartment(Request $request){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Best Sales Execetives (By Department)';
        $format = '.xlsx';
        $name = $topic.' ['.$date.' - '.$time.']'.$format;

        $username = $request->input('created_by');
        $role = $request->input('role');
        $reportsstat = $request->input('BeastSalesExecetivesFilterstaus');

        $userid = DB::Table('user_accounts')->where('user_name',$username)->value('id');
        $report = new reportsLog;
        $report->report_name = 'Best Sales Execetives';
        $report->report_status = $reportsstat;
        $report->type = 'excel';
        $report->created_by = $username;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

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

        $username = $request->input('created_by');
        $role = $request->input('role');
        $reportsstat = $request->input('reportstatus');

        $userid = DB::Table('user_accounts')->where('user_name',$username)->value('id');
        $report = new reportsLog;
        $report->report_name = 'Materials';
        $report->report_status = $reportsstat;
        $report->type = 'excel';
        $report->created_by = $username;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

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

        $username = $request->input('created_by');
        $role = $request->input('role');
        $reportsstat = $request->input('reportstatus');

        $userid = DB::Table('user_accounts')->where('user_name',$username)->value('id');
        $report = new reportsLog;
        $report->report_name = 'Stock Levels';
        $report->report_status = $reportsstat;
        $report->type = 'excel';
        $report->created_by = $username;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

        return Excel::download(new stocks, $name);
    }
    public function downloadsuppliersexcel(Request $request){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Default Suppliers';
        $createdby = $request->input('created_by');
        $role = $request->input('role');
        $format = '.xlsx';
        $name = $topic.' ('.$createdby.'-'.$role.') ['.$date.' - '.$time.']'.$format;

        $username = $request->input('created_by');
        $role = $request->input('role');
        $reportsstat = $request->input('reportstatus');

        $userid = DB::Table('user_accounts')->where('user_name',$username)->value('id');
        $report = new reportsLog;
        $report->report_name = 'Suppliers';
        $report->report_status = $reportsstat;
        $report->type = 'excel';
        $report->created_by = $username;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

        return Excel::download(new suppliers, $name);
    }
    public function downloadincomeexcel (Request $request){
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $topic = 'Income Report (Weekly)';
        $createdby = $request->input('created_by');
        $role = $request->input('role');
        $format = '.xlsx';
        $name = $topic.' ('.$createdby.'-'.$role.') ['.$date.' - '.$time.']'.$format;

        $username = $request->input('created_by');
        $role = $request->input('role');
        $reportsstat = $request->input('reportstatus');

        $userid = DB::Table('user_accounts')->where('user_name',$username)->value('id');
        $report = new reportsLog;
        $report->report_name = 'Income Report';
        $report->report_status = $reportsstat;
        $report->type = 'excel';
        $report->created_by = $username;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

        return Excel::download(new income, $name);
    }
}
