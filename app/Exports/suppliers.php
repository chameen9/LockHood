<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class suppliers implements FromView
{
    public function view(): View
    {
        $defaultsuppliers = DB::Table('default_suppliers')
            ->join('suppliers','suppliers.id','=','default_suppliers.supplier_id')
            ->join('material_item', 'material_item.id', '=', 'default_suppliers.material_id')
            ->select('default_suppliers.supplier_id','suppliers.supplier_name','suppliers.price','material_item.name','material_item.id')
            ->get();
        
        return view('excel.purchasing.suppliers',[
            'defaultsuppliers'=>$defaultsuppliers
        ]);
    }
}
