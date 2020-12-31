<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    
    function productlist(){
        return view('home.productlist');
    }

}
