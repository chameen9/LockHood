<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Customer;
use App\Rules\PasswordChecker;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Mail;
//use App\Mail\OrderMail;
use Carbon\Carbon;
use Validator;
use DB;

class LoginController extends Controller
{
    function checkLogin(Request $request){
        
        $this->validate($request, [
            'username'=>['required','string','max:100','min:1'],
            'password'=>['string', 'string','max:100','min:8'],
        ]);

        $reqUsername = $request->input('username');
        $reqPassword = $request->input('password');
        $gotUsername = DB::Table('user_accounts')->where('user_name',$reqUsername)->value('user_name');
        $gotPassword = DB::Table('user_accounts')->where('user_name',$reqUsername)->value('password');
        $userRoleId = DB::Table('user_accounts')->where('user_name',$reqUsername)->value('user_role');
        $userId = DB::Table('user_accounts')->where('user_name',$reqUsername)->value('user_id');
        $userLastName = DB::Table('users')->where('id',$userId)->value('last_name');
        $userFirstName = DB::Table('users')->where('id',$userId)->value('first_name');
        $userLevel = DB::Table('user_roles')->where('id',$userRoleId)->value('user_level');
        $userRole = DB::Table('user_roles')->where('id',$userRoleId)->value('role');
        $userLevelName = DB::table('user_roles')
                ->join('user_levels', 'user_levels.level_id', '=', 'user_roles.user_level')
                ->select('user_levels.level_name')
                ->where('user_roles.id', $userRoleId)
                ->value('level_name');
    
        if($gotUsername==$reqUsername){
            if($gotPassword==$reqPassword){

                return view('index',[
                    'username'=>$reqUsername,
                    'userLastName'=>$userLastName,
                    'userFirstName'=>$userFirstName,
                    'userRole'=>$userRole,
                    'userLevel'=>$userLevel,
                    'userLevelName'=>$userLevelName,
                ]); 
                   
            }
            else{
                return back()->with('error','Invalid Password. Try again !');
            }
        }
        else{
            return back()->with('error','Unkonown user !');
        }
    }
}
