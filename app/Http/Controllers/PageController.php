<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\PasswordChecker;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Validator;
use DB;

class PageController extends Controller
{
    function viewHr ($username){
        $internalUsersCount = DB::Table('users')->where([['type','=', '1']])->count();
        $externalUsersCount = DB::Table('users')->where([['type','=', '2']])->count();
        $activeUsersCount = DB::Table('users')->where([['status','=', 'ACTIVE']])->count();

        $internalUserPercentage = $internalUsersCount/$activeUsersCount * 100;
        $externalUserPercentage = $externalUsersCount/$activeUsersCount * 100;

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
    function viewDashboard ($username){

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
}
