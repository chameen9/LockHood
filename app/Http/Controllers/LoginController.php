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

        $userdepartment =  DB::Table('user_accounts')
            ->join('users','users.id','=','user_accounts.user_id')
            ->join('department_users','department_users.user_id','=','users.id')
            ->join('departments','departments.id','=','department_users.department_id')
            ->where('user_accounts.user_name',$reqUsername)
            ->value('departments.name');

        $userLevelName = DB::table('user_roles')
                ->join('user_levels', 'user_levels.level_id', '=', 'user_roles.user_level')
                ->select('user_levels.level_name')
                ->where('user_roles.id', $userRoleId)
                ->value('level_name');

        //cards
        $activekanbancards = DB::Table('kanban_card')
            ->join('workshops_units','workshops_units.id','=','kanban_card.workshop_unit_id')
            ->join('departments','departments.id','=','workshops_units.department_id')
            ->select('departments.name as department_name','kanban_card.id as card_id','kanban_card.name as card_name','kanban_card.status as card_status','kanban_card.date as card_date','kanban_card.completed_precentage as card_progress')
            ->where('kanban_card.status','ACTIVE')
            ->get();

        $todokanbancards = DB::Table('kanban_card')
            ->join('workshops_units','workshops_units.id','=','kanban_card.workshop_unit_id')
            ->join('departments','departments.id','=','workshops_units.department_id')
            ->select('departments.name as department_name','kanban_card.id as card_id','kanban_card.name as card_name','kanban_card.status as card_status','kanban_card.date as card_date','kanban_card.completed_precentage as card_progress')
            ->where('kanban_card.status','TODO')
            ->get();
        $todokanbancardscount = DB::Table('kanban_card')
            ->join('workshops_units','workshops_units.id','=','kanban_card.workshop_unit_id')
            ->join('departments','departments.id','=','workshops_units.department_id')
            ->select('departments.name as department_name','kanban_card.id as card_id','kanban_card.name as card_name','kanban_card.status as card_status','kanban_card.date as card_date','kanban_card.completed_precentage as card_progress')
            ->where('kanban_card.status','ACTIVE')
            ->count();

        $inreviewkanbancards = DB::Table('kanban_card')
            ->join('workshops_units','workshops_units.id','=','kanban_card.workshop_unit_id')
            ->join('departments','departments.id','=','workshops_units.department_id')
            ->select('departments.name as department_name','kanban_card.id as card_id','kanban_card.name as card_name','kanban_card.status as card_status','kanban_card.date as card_date','kanban_card.completed_precentage as card_progress')
            ->where('kanban_card.status','INREVIEW')
            ->get();


        // end-cards
    
        if($gotUsername==$reqUsername){
            if($gotPassword==$reqPassword){

                return view('index',[
                    'username'=>$reqUsername,
                    'userLastName'=>$userLastName,
                    'userFirstName'=>$userFirstName,
                    'userRole'=>$userRole,
                    'userLevel'=>$userLevel,
                    'userLevelName'=>$userLevelName,
                    'todokanbancards'=>$todokanbancards,
                    'activekanbancards'=>$activekanbancards,
                    'inreviewkanbancards'=>$inreviewkanbancards,
                    'userdepartment'=>$userdepartment,
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
