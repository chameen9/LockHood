<?php

namespace App\Exports;

use App\Models\sale;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class Selling20ProductsExport implements FromView
{
    
    public function view(): View
    {
        $topSellingProducts = DB::Table('sales')
            ->join('products', 'sales.product_id','products.id')
            ->select('sales.product_id','sales.quantity','sales.sold_price','products.name','products.price')
            ->orderBy('sales.quantity','DESC')
            ->take(20)
            ->get();

        return view('excel.topselling20products',[
            'topSellingProducts'=>$topSellingProducts
        ]);
    }
}
