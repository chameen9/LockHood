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

class PageController extends Controller
{
    function viewHr (Request $request){
        $internalActiveUsersCount = DB::Table('users')->where([['type','=', '1'],['status','=','ACTIVE']])->count();
        $internalAllUsersCount = DB::Table('users')->where([['type','=', '1']])->count();
        $externalActiveUsersCount = DB::Table('users')->where([['type','=', '2'],['status','=','ACTIVE']])->count();
        $externalAllUsersCount = DB::Table('users')->where([['type','=', '2']])->count();
        $activeUsersCount = DB::Table('users')->where([['status','=', 'ACTIVE']])->count();
        $allUsersCount = DB::Table('users')->count();

        $internalActiveUserPercentage = round($internalActiveUsersCount/$internalAllUsersCount * 100 , 2);
        $externalActiveUserPercentage = round($externalActiveUsersCount/$externalAllUsersCount * 100 , 2);

        $username = $request->input('username');
        $userRoleId = DB::Table('user_accounts')->where('user_name',$username)->value('user_role');
        $userId = DB::Table('user_accounts')->where('user_name',$username)->value('user_id');
        $userLastName = DB::Table('users')->where('id',$userId)->value('last_name');
        $userFirstName = DB::Table('users')->where('id',$userId)->value('first_name');
        $userRole = DB::Table('user_roles')->where('id',$userRoleId)->value('role');
        $userLevel = DB::Table('user_roles')->where('id',$userRoleId)->value('user_level');
        $userLevelName = DB::table('user_roles')
                ->join('user_levels', 'user_levels.level_id', '=', 'user_roles.user_level')
                ->select('user_levels.level_name')
                ->where('user_roles.id', $userRoleId)
                ->value('level_name');

        return view('hrview',[
            'internalActiveUsersCount'=>$internalActiveUsersCount,
            'internalAllUsersCount'=>$internalAllUsersCount,
            'externalActiveUsersCount'=>$externalActiveUsersCount,
            'externalAllUsersCount'=>$externalAllUsersCount,
            'activeUsersCount'=>$activeUsersCount,
            'allUsersCount'=>$allUsersCount,
            'internalActiveUserPercentage'=>$internalActiveUserPercentage,
            'externalActiveUserPercentage'=>$externalActiveUserPercentage,
            'username'=>$username,
            'userLastName'=>$userLastName,
            'userFirstName'=>$userFirstName,
            'userRole'=>$userRole,
            'userRoleId'=>$userRoleId,
            'userLevel'=>$userLevel,
            'userLevelName'=>$userLevelName,
        ]);
    }

    function viewDashboard (Request $request){

        $username = $request->input('username');
        $userRoleId = DB::Table('user_accounts')->where('user_name',$username)->value('user_role');
        $userId = DB::Table('user_accounts')->where('user_name',$username)->value('user_id');
        $userLastName = DB::Table('users')->where('id',$userId)->value('last_name');
        $userFirstName = DB::Table('users')->where('id',$userId)->value('first_name');
        $userRole = DB::Table('user_roles')->where('id',$userRoleId)->value('role');
        $userLevel = DB::Table('user_roles')->where('id',$userRoleId)->value('user_level');
        $userLevelName = DB::table('user_roles')
                ->join('user_levels', 'user_levels.level_id', '=', 'user_roles.user_level')
                ->select('user_levels.level_name')
                ->where('user_roles.id', $userRoleId)
                ->value('level_name');

        return view('index',[
            'username'=>$username,
            'userLastName'=>$userLastName,
            'userFirstName'=>$userFirstName,
            'userRole'=>$userRole,
            'userRoleId'=>$userRoleId,
            'userLevel'=>$userLevel,
            'userLevelName'=>$userLevelName,
        ]);
    }

    function viewSales (Request $request){

        if($request->input('username')==null){
            return view('404error');
        }
        else{
            $username = $request->input('username');

            $userRoleId = DB::Table('user_accounts')->where('user_name',$username)->value('user_role');
            $userId = DB::Table('user_accounts')->where('user_name',$username)->value('user_id');
            $userLastName = DB::Table('users')->where('id',$userId)->value('last_name');
            $userFirstName = DB::Table('users')->where('id',$userId)->value('first_name');
            $userRole = DB::Table('user_roles')->where('id',$userRoleId)->value('role');
            $userLevel = DB::Table('user_roles')->where('id',$userRoleId)->value('user_level');
            $userLevelName = DB::table('user_roles')
                ->join('user_levels', 'user_levels.level_id', '=', 'user_roles.user_level')
                ->select('user_levels.level_name')
                ->where('user_roles.id', $userRoleId)
                ->value('level_name');
    
            $saleProducts = DB::Table('sales')->orderby('quantity','desc')->take(10)->get();
    
            $decodedArray = json_decode(json_encode($saleProducts), true);
    
            $products = DB::Table('products')->get();
            $productSales = DB::Table('sales')->get();
             
            $productIds = [
                $decodedArray[0]['product_id'],
                $decodedArray[1]['product_id'],
                $decodedArray[2]['product_id'],
                $decodedArray[3]['product_id'],
                $decodedArray[4]['product_id'],
                $decodedArray[5]['product_id'],
                $decodedArray[6]['product_id'],
                $decodedArray[7]['product_id'],
                $decodedArray[8]['product_id'],
                $decodedArray[9]['product_id'],
            ];
            $productQtys = [
                $decodedArray[0]['quantity'],
                $decodedArray[1]['quantity'],
                $decodedArray[2]['quantity'],
                $decodedArray[3]['quantity'],
                $decodedArray[4]['quantity'],
                $decodedArray[5]['quantity'],
                $decodedArray[6]['quantity'],
                $decodedArray[7]['quantity'],
                $decodedArray[8]['quantity'],
                $decodedArray[9]['quantity'],
            ];
    
            $totalProducts = DB::Table('products')->where('status','ACTIVE')->count();
            $totalQuantity = DB::Table('sales')->sum('quantity');

            $saleEmployees = DB::table('sales')
                ->join('users', 'sales.sold_by', '=', 'users.id')
                ->join('department_users', 'users.id', '=', 'department_users.user_id')
                ->join('departments', 'department_users.department_id', '=', 'departments.id')
                ->select('sales.sold_by', 'users.first_name', 'users.last_name', 'users.status', 'departments.name', DB::raw('COUNT(users.id) AS count'))
                ->groupBy('users.id')
                ->orderBy('count', 'desc')
                ->get();

            $topSellingProducts = DB::Table('sales')
                ->join('products', 'sales.product_id','products.id')
                ->select('sales.product_id','sales.quantity','sales.sold_price','products.name','products.price')
                ->orderBy('sales.quantity','DESC')
                ->take(10)
                ->get();
            
            $top10ProductFilterstaus = 'Top 10';
            //dd($userLevel);
            //dd($userLevelName);

            /*return view('test',[
                'topSellingProducts'=>$topSellingProducts
            ]);*/
            return view('sales',[
                'username'=>$username,
                'userLastName'=>$userLastName,
                'userFirstName'=>$userFirstName,
                'userRole'=>$userRole,
                'userRoleId'=>$userRoleId,
                'userLevel'=>$userLevel,
                'userLevelName'=>$userLevelName,
                'saleProducts'=>$saleProducts,
                'productQtys'=>$productQtys,
                'productIds'=>$productIds,
                'totalRevenue'=>null,
                'totalProducts'=>$totalProducts,
                'totalQuantity'=>$totalQuantity,
                'saleEmployees'=>$saleEmployees,
                'topSellingProducts'=>$topSellingProducts,
                'top10ProductFilterstaus'=>$top10ProductFilterstaus,
            ]);
        }
    }

    function viewsalesandmarketingbytop20 (Request $request){

        if($request->input('username')==null){
            return view('404error');
        }
        else{
            $username = $request->input('username');

            $userRoleId = DB::Table('user_accounts')->where('user_name',$username)->value('user_role');
            $userId = DB::Table('user_accounts')->where('user_name',$username)->value('user_id');
            $userLastName = DB::Table('users')->where('id',$userId)->value('last_name');
            $userFirstName = DB::Table('users')->where('id',$userId)->value('first_name');
            $userRole = DB::Table('user_roles')->where('id',$userRoleId)->value('role');
            $userLevel = DB::Table('user_roles')->where('id',$userRoleId)->value('user_level');
            $userLevelName = DB::table('user_roles')
                ->join('user_levels', 'user_levels.level_id', '=', 'user_roles.user_level')
                ->select('user_levels.level_name')
                ->where('user_roles.id', $userRoleId)
                ->value('level_name');
    
            $saleProducts = DB::Table('sales')->orderby('quantity','desc')->take(10)->get();
    
            $decodedArray = json_decode(json_encode($saleProducts), true);
    
            $products = DB::Table('products')->get();
            $productSales = DB::Table('sales')->get();
             
            $productIds = [
                $decodedArray[0]['product_id'],
                $decodedArray[1]['product_id'],
                $decodedArray[2]['product_id'],
                $decodedArray[3]['product_id'],
                $decodedArray[4]['product_id'],
                $decodedArray[5]['product_id'],
                $decodedArray[6]['product_id'],
                $decodedArray[7]['product_id'],
                $decodedArray[8]['product_id'],
                $decodedArray[9]['product_id'],
            ];
            $productQtys = [
                $decodedArray[0]['quantity'],
                $decodedArray[1]['quantity'],
                $decodedArray[2]['quantity'],
                $decodedArray[3]['quantity'],
                $decodedArray[4]['quantity'],
                $decodedArray[5]['quantity'],
                $decodedArray[6]['quantity'],
                $decodedArray[7]['quantity'],
                $decodedArray[8]['quantity'],
                $decodedArray[9]['quantity'],
            ];
    
            $totalProducts = DB::Table('products')->where('status','ACTIVE')->count();
            $totalQuantity = DB::Table('sales')->sum('quantity');

            $saleEmployees = DB::table('sales')
                ->join('users', 'sales.sold_by', '=', 'users.id')
                ->join('department_users', 'users.id', '=', 'department_users.user_id')
                ->join('departments', 'department_users.department_id', '=', 'departments.id')
                ->select('sales.sold_by', 'users.first_name', 'users.last_name', 'users.status', 'departments.name', DB::raw('COUNT(users.id) AS count'))
                ->groupBy('users.id')
                ->orderBy('count', 'desc')
                ->get();

            $topSellingProducts = DB::Table('sales')
                ->join('products', 'sales.product_id','products.id')
                ->select('sales.product_id','sales.quantity','sales.sold_price','products.name','products.price')
                ->orderBy('sales.quantity','DESC')
                ->take(20)
                ->get();
            
            $top10ProductFilterstaus = 'Top 20';
            //dd($userLevel);
            //dd($userLevelName);

            /*return view('test',[
                'topSellingProducts'=>$topSellingProducts
            ]);*/
            return view('sales',[
                'username'=>$username,
                'userLastName'=>$userLastName,
                'userFirstName'=>$userFirstName,
                'userRole'=>$userRole,
                'userRoleId'=>$userRoleId,
                'userLevel'=>$userLevel,
                'userLevelName'=>$userLevelName,
                'saleProducts'=>$saleProducts,
                'productQtys'=>$productQtys,
                'productIds'=>$productIds,
                'totalRevenue'=>null,
                'totalProducts'=>$totalProducts,
                'totalQuantity'=>$totalQuantity,
                'saleEmployees'=>$saleEmployees,
                'topSellingProducts'=>$topSellingProducts,
                'top10ProductFilterstaus'=>$top10ProductFilterstaus,
            ]);
        }
    }
}
