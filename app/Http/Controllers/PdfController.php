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

        $topic = 'Best sales Execetives';
        $format = '.pdf';
        $pdfName = $topic.' '.$date.' '.$time.''.$format;

        $saleEmployees = DB::table('sales')
            ->join('users', 'sales.sold_by', '=', 'users.id')
            ->join('department_users', 'users.id', '=', 'department_users.user_id')
            ->join('departments', 'department_users.department_id', '=', 'departments.id')
            ->select('sales.sold_by', 'users.first_name', 'users.last_name', 'users.status', 'departments.name', DB::raw('COUNT(users.id) AS count'))
            ->groupBy('users.id')
            ->orderBy('count', 'desc')
            ->get();

        $pdf = Pdf::loadview('pdf.bestsalesexecetives',[
            'saleEmployees'=>$saleEmployees,
            'date'=>$date,
            'time'=>$time,
            'role'=>$role,
            'name'=>$name
        ]);
        return $pdf->download($pdfName);
    }
}
