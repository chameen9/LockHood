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


        $saleProducts = DB::Table('product_sales')->orderby('quantity','desc')->take(10)->get();

        $decodedArray = json_decode(json_encode($saleProducts), true);

        $products = DB::Table('products')->get();
        $productsPrices = product::all('price');

        $name0id = $decodedArray[0]['product_id'];
        $name1id = $decodedArray[1]['product_id'];
        $name2id = $decodedArray[2]['product_id'];
        $name3id = $decodedArray[3]['product_id'];
        $name4id = $decodedArray[4]['product_id'];
        $name5id = $decodedArray[5]['product_id'];
        $name6id = $decodedArray[6]['product_id'];
        $name7id = $decodedArray[7]['product_id'];
        $name8id = $decodedArray[8]['product_id'];
        $name9id = $decodedArray[9]['product_id'];

        //$productNames = [$productName0,$productName1,$productName2,$productName3,$productName4,$productName5,$productName6,$productName7,$productName8,$productName9];
        
        $productNamesAndPrices = [
            [DB::Table('products')->where('id',$name0id)->value('name'),DB::Table('products')->where('id',$name0id)->value('price')],
            [DB::Table('products')->where('id',$name1id)->value('name'),DB::Table('products')->where('id',$name1id)->value('price')],
            [DB::Table('products')->where('id',$name2id)->value('name'),DB::Table('products')->where('id',$name2id)->value('price')],
            [DB::Table('products')->where('id',$name3id)->value('name'),DB::Table('products')->where('id',$name3id)->value('price')],
            [DB::Table('products')->where('id',$name4id)->value('name'),DB::Table('products')->where('id',$name4id)->value('price')],
            [DB::Table('products')->where('id',$name5id)->value('name'),DB::Table('products')->where('id',$name5id)->value('price')],
            [DB::Table('products')->where('id',$name6id)->value('name'),DB::Table('products')->where('id',$name6id)->value('price')],
            [DB::Table('products')->where('id',$name7id)->value('name'),DB::Table('products')->where('id',$name7id)->value('price')],
            [DB::Table('products')->where('id',$name8id)->value('name'),DB::Table('products')->where('id',$name8id)->value('price')],
            [DB::Table('products')->where('id',$name9id)->value('name'),DB::Table('products')->where('id',$name9id)->value('price')],
        ];
        
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
        $totalRevenue = $productQtys[0]*$productNamesAndPrices[0][1];

        $totalProducts = DB::Table('products')->count();
        $totalQuantity = DB::Table('product_sales')->sum('quantity');

        return view('sales',[
            'username'=>$username,
            'userLastName'=>$userLastName,
            'userFirstName'=>$userFirstName,
            'userRole'=>$userRole,
            'saleProducts'=>$saleProducts,
            'productQtys'=>$productQtys,
            'products'=>$products,
            'productIds'=>$productIds,
            'productNamesAndPrices'=>$productNamesAndPrices,
            'totalRevenue'=>$totalRevenue,
            'totalProducts'=>$totalProducts,
            'totalQuantity'=>$totalQuantity,
        ]);
    }
}
