<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class loginController extends Controller
{
    public function index(){
		return view('login.index');
	}
	public function verify(Request $req){
		//$req->session()-put('name',$req->username);
		//$req->session()-get('name')
        //$req->session()-has('name');
        $users= Employee::where('username',$req->username)
                ->where('password', $req->password)
                ->get();
                if(count($users) > 0){
                    $req->session()->put('username', $req->username);
                    $req->session()->put('type', $req->username);
                    
                    return redirect('/home');
                }else{
                    $req->session()->flash('msg', 'invalid username/password');
                    return redirect('/login');
                }
    }
}
