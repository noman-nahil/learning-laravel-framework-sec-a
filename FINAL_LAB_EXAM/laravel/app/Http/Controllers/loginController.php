<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;

class loginController extends Controller
{
    public function index(){
		return view('login.index');
	}
	public function verify(Request $req){
        $users= Employee::where('username',$req->username)
                ->where('password', $req->password)
                ->get();
                if(count($users) > 0){
                    //$userType = Employee::find($req->username)->type;
                    $userType = DB::table('Employee')->where('username',$req->username)->value('type');
                    //echo "$userType";
                    if($userType == 'admin'){
                        $req->session()->put('username', $req->username);
                        $req->session()->put('type', $userType);
                        return redirect('/home');
                        //echo "$userType";
                    }
                    else if($userType == 'employee'){
                        //echo "Employee";
                        $req->session()->put('username', $req->username);
                        $req->session()->put('type', $userType);
                        return redirect('/employee');
                    }
                    else{
                        $req->session()->flash('msg', 'Invalid Request!!');
                        return redirect('/login');
                    }
                    
                }else{
                    $req->session()->flash('msg', 'invalid username/password');
                    return redirect('/login');
                }
    }
}