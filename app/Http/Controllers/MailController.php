<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\PurchasingOrder;
use DB;
use App\Http\Controllers\PageController;

class MailController extends Controller
{
    function sendpurchasingorder(Request $request){
        $matid = $request->input('matid');
        $supid = $request->input('supid');
        $requsername = $request->input('username');
        //for the mail
        $purchasingofficerfirstname = DB::Table('user_accounts')
            ->join('user_roles','user_roles.id','=','user_accounts.user_role')
            ->join('users','users.id','=','user_accounts.user_id')
            ->where([['user_accounts.status','ACTIVE'],['user_roles.role','Purchasing Officer']])
            ->value('users.first_name');
        $purchasingofficerlastname = DB::Table('user_accounts')
            ->join('user_roles','user_roles.id','=','user_accounts.user_role')
            ->join('users','users.id','=','user_accounts.user_id')
            ->where([['user_accounts.status','ACTIVE'],['user_roles.role','Purchasing Officer']])
            ->value('users.last_name');
        $purchasingofficeremail = DB::Table('user_accounts')
            ->join('user_roles','user_roles.id','=','user_accounts.user_role')
            ->join('users','users.id','=','user_accounts.user_id')
            ->where([['user_accounts.status','ACTIVE'],['user_roles.role','Purchasing Officer']])
            ->value('user_accounts.email');

        $materialname = DB::Table('material_item')->where('id',$matid)->value('name');
        $suppliername = DB::Table('suppliers')->where('id',$supid)->value('supplier_name');
        $supplierprice = DB::Table('suppliers')->where('id',$supid)->value('price');
        $currentstock = DB::Table('stock')->where('material_item_id',$matid)->value('available_qty');

        $details = [
            'title'=>'Hi '.$purchasingofficerlastname.',',
            'line1'=>'The re-orderlevel of some items has been reached !',
            'line3'=>'Re-order level reached material :',
            'line2'=>'Please make sure to place a purchasing order for this item.',
            'line4'=>'Default supplier : ',
            'line5'=>'Current Stock : ',
            'line6'=>'Price per 1KG : ',
            'materialname'=>$materialname,
            'matid'=>$matid,
            'suppliername'=>$suppliername,
            'supplierprice'=>$supplierprice,
            'supid'=>$supid,
            'currentstock'=>$currentstock,
            'email'=>$purchasingofficeremail,
        ];
        Mail::to($purchasingofficeremail)->send(new PurchasingOrder($details));
        return view('mailsent',[
            'username'=>$requsername
        ]);
        //end for the mail
        //return redirect('/viewpurchasingwithparameters')->with('username', $requsername);
        //return \Redirect::route('/viewpurchasingwithparameters')->with('username', $requsername);
        

    }
    function abcd(){
        $userRoleId = DB::Table('user_accounts')->where('user_name',$requsername)->value('user_role');
        $userId = DB::Table('user_accounts')->where('user_name',$requsername)->value('user_id');
        $userLastName = DB::Table('users')->where('id',$userId)->value('last_name');
        $userFirstName = DB::Table('users')->where('id',$userId)->value('first_name');
        $userRole = DB::Table('user_roles')->where('id',$userRoleId)->value('role');
        $userLevel = DB::Table('user_roles')->where('id',$userRoleId)->value('user_level');
        $userLevelName = DB::table('user_roles')
            ->join('user_levels', 'user_levels.level_id', '=', 'user_roles.user_level')
            ->select('user_levels.level_name')
            ->where('user_roles.id', $userRoleId)
            ->value('level_name');
        
        $defaultsuppliers = DB::Table('default_suppliers')
            ->join('suppliers','suppliers.id','=','default_suppliers.supplier_id')
            ->join('material_item', 'material_item.id', '=', 'default_suppliers.material_id')
            ->select('default_suppliers.supplier_id','suppliers.supplier_name','suppliers.price','material_item.name','material_item.id')
            ->get();

        $stocks = DB::Table('stock')->get();

        $materials = DB::Table('stock')
            ->join('material_item', 'material_item.id', '=', 'stock.material_item_id')
            ->join('default_suppliers','default_suppliers.id','=','material_item.id')
            ->join('suppliers','suppliers.id','=','default_suppliers.supplier_id')
            ->select('material_item.id','material_item.name','stock.reorder_level','stock.available_qty','suppliers.id as sup_id')
            ->get();

        $stocksmetidstoarray = [];
        foreach ($stocks as $data) {
            $stocksmetidstoarray[] = $data->material_item_id;
        }
        $stocksmaxleveltoarray = [];
        foreach ($stocks as $data) {
            $stocksmaxleveltoarray[] = $data->max_stock_limit;
        }
        $stockscurrentleveltoarray = [];
        foreach ($stocks as $data) {
            $stockscurrentleveltoarray[] = $data->available_qty;
        }
        $stocksreorderleveltoarray = [];
        foreach ($stocks as $data) {
            $stocksreorderleveltoarray[] = $data->reorder_level;
        }
        return view('purchasing',[
            'username'=>$requsername,
            'userLastName'=>$userLastName,
            'userFirstName'=>$userFirstName,
            'userRole'=>$userRole,
            'userRoleId'=>$userRoleId,
            'userLevel'=>$userLevel,
            'userLevelName'=>$userLevelName,
            'stocksmetidstoarray'=>$stocksmetidstoarray,
            'stocksmaxleveltoarray'=>$stocksmaxleveltoarray,
            'stockscurrentleveltoarray'=>$stockscurrentleveltoarray,
            'stocksreorderleveltoarray'=>$stocksreorderleveltoarray,
            'materials'=>$materials,
            'defaultsuppliers'=>$defaultsuppliers,
        ]);
    }
}
