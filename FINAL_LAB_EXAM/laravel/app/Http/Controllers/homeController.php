<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;
class homeController extends Controller
{
    //
    function index(Request $req){
        
        $name = $req->session()->get('username');
        return view('home.index',compact('name'));
      
    }
    function create(){
        return view('home.create');
    }
    function add(Request $req){
        $user = new Employee();
        $user->ename = $req->ename;
        $user->contact = $req->contact;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->type = 'employee';

        if($user->save()){
            $req->session()->flash('createmsg', 'Employee Added Successfully');
            //return redirect()->route('create');
            return redirect('/create');
        }else{
            $req->session()->flash('createmsg', 'Something Wrong');
            return redirect('/create');
            
        }
        //return view('home.create');
    }

    
    function userlist(){
        $emloyeelist = DB::table('employee')->where('type','employee')
        ->get();
        //echo "$users";
        $emloyeelist->transform(function($i) {
            return (array)$i;
        });
        $users = $emloyeelist->toArray();

        return view('home.userlist')->with("users",$users);
    }
    function edit($id){
        $user = Employee::find($id);
        return view('home.edit',$user);
        //echo "$user";
    }
    function delete($id){
        $user = Employee::find($id);
        return view('home.delete',$user);
        //echo "$user";
    }
    function deletepost($id){
        DB::table('employee')->delete($id);
        return redirect('/userlist');
    }

}
