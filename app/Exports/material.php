<?php

namespace App\Exports;

use App\Models\stock;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class material implements FromView
{
    public function view(): View
    {
        $materials = DB::Table('stock')
            ->join('material_item', 'material_item.id', '=', 'stock.material_item_id')
            ->join('default_suppliers','default_suppliers.id','=','material_item.id')
            ->join('suppliers','suppliers.id','=','default_suppliers.supplier_id')
            ->select('material_item.id','material_item.name','stock.reorder_level','stock.available_qty','suppliers.id as sup_id')
            ->get();
        
        return view('excel.purchasing.materials',[
            'materials'=>$materials
        ]);
    }
}
