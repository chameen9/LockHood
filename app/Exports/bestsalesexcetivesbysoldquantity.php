<?php

namespace App\Exports;

use App\Models\sale;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class bestsalesexcetivesbysoldquantity implements FromView
{
    public function view(): View
    {
        $saleEmployees = DB::table('sales')
            ->join('users', 'sales.sold_by', '=', 'users.id')
            ->join('department_users', 'users.id', '=', 'department_users.user_id')
            ->join('departments', 'department_users.department_id', '=', 'departments.id')
            ->select('sales.sold_by', 'users.first_name', 'users.last_name', 'users.status', 'departments.name', DB::raw('COUNT(users.id) AS count'))
            ->groupBy('users.id')
            ->orderBy('count', 'desc')
            ->get();
        
        return view('excel.sales.bestsalesexcetivesbysoldquantity',[
            'saleEmployees'=>$saleEmployees
        ]);
    }
}
