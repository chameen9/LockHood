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
use Illuminate\Support\Js;

class PageController extends Controller
{
    function viewHr (Request $request){
        $internalUsersCount = DB::Table('users')->where([['type','=', '1']])->count();
        $externalUsersCount = DB::Table('users')->where([['type','=', '2']])->count();
        $activeUsersCount = DB::Table('users')->where([['status','=', 'ACTIVE']])->count();

        $internalUserPercentage = $internalUsersCount/$activeUsersCount * 100;
        $externalUserPercentage = $externalUsersCount/$activeUsersCount * 100;

        $username = $request->input('username');
        $userRoleId = DB::Table('user_accounts')->where('user_name',$username)->value('user_role');
        $userId = DB::Table('user_accounts')->where('user_name',$username)->value('user_id');
        $userLastName = DB::Table('users')->where('id',$userId)->value('last_name');
        $userFirstName = DB::Table('users')->where('id',$userId)->value('first_name');
        $userRole = DB::Table('user_roles')->where('id',$userRoleId)->value('role');

        return view('hrview',[
            'internalUsersCount'=>$internalUsersCount,
            'externalUsersCount'=>$externalUsersCount,
            'activeUsersCount'=>$activeUsersCount,
            'internalUserPercentage'=>$internalUserPercentage,
            'externalUserPercentage'=>$externalUserPercentage,
            'username'=>$username,
            'userLastName'=>$userLastName,
            'userFirstName'=>$userFirstName,
            'userRole'=>$userRole,
        ]);
    }
    function viewDashboard (Request $request){

        $username = $request->input('username');
        $userRoleId = DB::Table('user_accounts')->where('user_name',$username)->value('user_role');
        $userId = DB::Table('user_accounts')->where('user_name',$username)->value('user_id');
        $userLastName = DB::Table('users')->where('id',$userId)->value('last_name');
        $userFirstName = DB::Table('users')->where('id',$userId)->value('first_name');
        $userRole = DB::Table('user_roles')->where('id',$userRoleId)->value('role');

        return view('index',[
            'username'=>$username,
            'userLastName'=>$userLastName,
            'userFirstName'=>$userFirstName,
            'userRole'=>$userRole,
        ]);
    }
    function viewSales (Request $request){

        $username = $request->input('username');
        $userRoleId = DB::Table('user_accounts')->where('user_name',$username)->value('user_role');
        $userId = DB::Table('user_accounts')->where('user_name',$username)->value('user_id');
        $userLastName = DB::Table('users')->where('id',$userId)->value('last_name');
        $userFirstName = DB::Table('users')->where('id',$userId)->value('first_name');
        $userRole = DB::Table('user_roles')->where('id',$userRoleId)->value('role');

        $products = DB::Table('products')->where('status','ACTIVE')->orderby('price','desc')->take(10)->get();
        $productsIds = product::all('id');
        $productsPrices = product::all('price');

        //dd($productsPrices);
        //echo $productsPrices;
        return view('sales',[
            'username'=>$username,
            'userLastName'=>$userLastName,
            'userFirstName'=>$userFirstName,
            'userRole'=>$userRole,
            'products'=>$products,
            'productsIds'=>$productsIds,
            'productsPrices'=>$productsPrices,
        ]);
    }
}
