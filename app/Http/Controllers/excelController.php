<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Models\sale;

class excelController extends Controller
{
    public function downloadtopsellingproductsexcel(Request $request){
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
        $format = '.xlsx';
        $Name = $topic.' '.$name.''.$role.' ['.$date.' '.$time.']'.$format;

        $topSellingProducts = DB::Table('sales')
            ->join('products', 'sales.product_id','products.id')
            ->select('sales.product_id as Product ID','products.name as Product Name','products.price as Product Price','sales.quantity as Quantity','sales.sold_price as Sold Price')
            ->orderBy('sales.quantity','DESC')
            ->take($takeNumber)
            ->get();

        return (new FastExcel($topSellingProducts))
            ->download($Name);
    }
}
