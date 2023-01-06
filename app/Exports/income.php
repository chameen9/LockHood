<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class income implements FromView
{
    public function view(): View
    {
        $incomestatus = DB::table('income_lastweek')
            ->where('date', '>=', DB::raw('DATE_SUB(CURDATE(), INTERVAL 7 DAY)'))
            ->orderBy('date', 'asc')
            ->get();
        
        return view('excel.finance.income',[
            'incomestatus'=>$incomestatus
        ]);
    }
}
