<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\PasswordChecker;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Validator;
use DB;
use App\Models\product;
use App\Models\product_sale;
use App\Models\sale;
use App\Models\reportsLog;
use Illuminate\Support\Js;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function downloadtopsellingproductspdf(Request $request){
        $name = $request->input('created_by');
        $role = $request->input('role');
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString(); 
        $top10ProductFilterstaus = $request->input('top10ProductFilterstaus');
        
        if($top10ProductFilterstaus == 'Top 10'){
            $takeNumber = 10;
        }
        else{
            $takeNumber = 20;
        }

        $topic = 'Top '.$takeNumber.' Selling Products';
        $format = '.pdf';
        $pdfName = $topic.' '.$date.' '.$time.''.$format;

        $topSellingProducts = DB::Table('sales')
            ->join('products', 'sales.product_id','products.id')
            ->select('sales.product_id','sales.quantity','sales.sold_price','products.name','products.price')
            ->orderBy('sales.quantity','DESC')
            ->take($takeNumber)
             ->get();

        $userid = DB::Table('user_accounts')->where('user_name',$name)->value('id');
        $report = new reportsLog;
        $report->report_name = 'Top Selling Products';
        $report->report_status = 'Top '.$takeNumber;
        $report->type = 'pdf';
        $report->created_by = $name;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

        $pdf = Pdf::loadview('pdf.topsellingproductspdf',[
            'topSellingProducts'=>$topSellingProducts,
            'date'=>$date,
            'time'=>$time,
            'role'=>$role,
            'name'=>$name,
            'takeNumber'=>$takeNumber,
        ]);
        return $pdf->download($pdfName);
    }
    public function bestSalesExecetives(Request $request){
        $name = $request->input('created_by');
        $role = $request->input('role');
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $BeastSalesExecetivesFilterstaus = $request->input('BeastSalesExecetivesFilterstaus');

        if($BeastSalesExecetivesFilterstaus == 'Sold Quantity'){
            $orderBy = 'count';
            $reportstat = 'By Count';
            $order = 'desc';
        }
        else if($BeastSalesExecetivesFilterstaus == 'Department'){
            $orderBy = 'departments.name';
            $reportstat = 'By Department';
            $order = 'asc';
        }
        else{
            $orderBy = 'users.status';
            $reportstat = 'By User Status';
            $order = 'asc';
        }

        $topic = 'Best sales Execetives';
        $format = '.pdf';
        $pdfName = $topic.' ['.$BeastSalesExecetivesFilterstaus.'] '.$date.' '.$time.''.$format;

        $saleEmployees = DB::table('sales')
            ->join('users', 'sales.sold_by', '=', 'users.id')
            ->join('department_users', 'users.id', '=', 'department_users.user_id')
            ->join('departments', 'department_users.department_id', '=', 'departments.id')
            ->select('sales.sold_by', 'users.first_name', 'users.last_name', 'users.status', 'departments.name', DB::raw('COUNT(users.id) AS count'))
            ->groupBy('users.id')
            ->orderBy($orderBy, $order)
            ->get();

            $userid = DB::Table('user_accounts')->where('user_name',$name)->value('id');
            $report = new reportsLog;
            $report->report_name = $topic;
            $report->report_status = $reportstat;
            $report->type = 'pdf';
            $report->created_by = $name;
            $report->created_at = Carbon::Now('Asia/Colombo');
            $report->user_id = $userid;
            $report->save();

        $pdf = Pdf::loadview('pdf.bestsalesexecetives',[
            'saleEmployees'=>$saleEmployees,
            'date'=>$date,
            'time'=>$time,
            'role'=>$role,
            'name'=>$name,
            'BeastSalesExecetivesFilterstaus'=>$BeastSalesExecetivesFilterstaus
        ]);
        return $pdf->download($pdfName);
    }
    public function downloadmaterialspdf(Request $request){
        $name = $request->input('created_by');
        $role = $request->input('role');
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $reportstatus = $request->input('reportstatus');
        $materials = DB::Table('stock')
            ->join('material_item', 'material_item.id', '=', 'stock.material_item_id')
            ->join('default_suppliers','default_suppliers.id','=','material_item.id')
            ->join('suppliers','suppliers.id','=','default_suppliers.supplier_id')
            ->select('material_item.id','material_item.name','stock.reorder_level','stock.available_qty','suppliers.id as sup_id')
            ->get();

        $topic = 'Materials By Id';
        $format = '.pdf';
        $pdfName = $topic.' ['.$date.' '.$time.']'.$format;

        $userid = DB::Table('user_accounts')->where('user_name',$name)->value('id');
        $report = new reportsLog;
        $report->report_name = $topic;
        $report->report_status = $reportstatus;
        $report->type = 'pdf';
        $report->created_by = $name;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

        $pdf = Pdf::loadview('pdf.materials',[
            'materials'=>$materials,
            'date'=>$date,
            'time'=>$time,
            'role'=>$role,
            'name'=>$name,
            'reportstatus'=>$reportstatus
        ]);
        return $pdf->download($pdfName);
    }
    public function downloadstockspdf(Request $request){
        $name = $request->input('created_by');
        $role = $request->input('role');
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $reportstatus = $request->input('reportstatus');

        $stocks = DB::Table('stock')
            ->join('material_item','material_item.id','=','stock.material_item_id')
            ->select('stock.material_item_id','material_item.name','stock.max_stock_limit','stock.available_qty','stock.reorder_level')
            ->get();

        $topic = 'Current Stock Levels';
        $format = '.pdf';
        $pdfName = $topic.' ['.$date.' '.$time.']'.$format;

        $userid = DB::Table('user_accounts')->where('user_name',$name)->value('id');
        $report = new reportsLog;
        $report->report_name = $topic;
        $report->report_status = $reportstatus;
        $report->type = 'pdf';
        $report->created_by = $name;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

        $pdf = Pdf::loadview('pdf.stocks',[
            'stocks'=>$stocks,
            'date'=>$date,
            'time'=>$time,
            'role'=>$role,
            'name'=>$name,
            'reportstatus'=>$reportstatus
        ]);
        return $pdf->download($pdfName);
    }
    public function downloadsupplierspdf(Request $request){
        $name = $request->input('created_by');
        $role = $request->input('role');
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $reportstatus = $request->input('reportstatus');

        $defaultsuppliers = DB::Table('default_suppliers')
            ->join('suppliers','suppliers.id','=','default_suppliers.supplier_id')
            ->join('material_item', 'material_item.id', '=', 'default_suppliers.material_id')
            ->select('default_suppliers.supplier_id','suppliers.supplier_name','suppliers.price','material_item.name','material_item.id')
            ->get();
        
        $topic = 'Default Suppliers';
        $format = '.pdf';
        $pdfName = $topic.' ['.$date.' '.$time.']'.$format;

        $userid = DB::Table('user_accounts')->where('user_name',$name)->value('id');
        $report = new reportsLog;
        $report->report_name = $topic;
        $report->report_status = $reportstatus;
        $report->type = 'pdf';
        $report->created_by = $name;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();

        $pdf = Pdf::loadview('pdf.suppliers',[
            'defaultsuppliers'=>$defaultsuppliers,
            'date'=>$date,
            'time'=>$time,
            'role'=>$role,
            'name'=>$name,
            'reportstatus'=>$reportstatus
        ]);
        return $pdf->download($pdfName);
    }
    public function downloadincomepdf (Request $request){
        $name = $request->input('created_by');
        $role = $request->input('role');
        $date = Carbon::today('Asia/Colombo')->toDateString();
        $time = Carbon::now('Asia/Colombo')->toTimeString();
        $reportstatus = $request->input('reportstatus');

        $incomestatus = DB::table('income_lastweek')
            ->where('date', '>=', DB::raw('DATE_SUB(CURDATE(), INTERVAL 7 DAY)'))
            ->orderBy('date', 'asc')
            ->get();

        $topic = 'Inome Report';
        $format = '.pdf';
        $pdfName = $topic.' ('.$reportstatus.') ['.$date.' '.$time.']'.$format;

        $userid = DB::Table('user_accounts')->where('user_name',$name)->value('id');
        $report = new reportsLog;
        $report->report_name = $topic;
        $report->report_status = $reportstatus;
        $report->type = 'pdf';
        $report->created_by = $name;
        $report->created_at = Carbon::Now('Asia/Colombo');
        $report->user_id = $userid;
        $report->save();
        
        $pdf = Pdf::loadview('pdf.income',[
            'incomestatus'=>$incomestatus,
            'date'=>$date,
            'time'=>$time,
            'role'=>$role,
            'name'=>$name,
            'reportstatus'=>$reportstatus
        ]);
        return $pdf->download($pdfName);
    }
}