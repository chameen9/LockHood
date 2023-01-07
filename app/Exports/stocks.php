<?php

namespace App\Exports;

use App\Models\stock;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class stocks implements FromView
{
    public function view(): View
    {
        $stocks = DB::Table('stock')
            ->join('material_item','material_item.id','=','stock.material_item_id')
            ->select('stock.material_item_id','material_item.name','stock.max_stock_limit',
            'stock.available_qty','stock.reorder_level')
            ->get();
        
        return view('excel.purchasing.stocks',[
            'stocks'=>$stocks
        ]);
    }
}
