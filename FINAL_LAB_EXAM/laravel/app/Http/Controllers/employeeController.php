<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    function index(Request $req){
        
        $name = $req->session()->get('username');
        return view('employee.index',compact('name'));
      
    }
    function addproduct(){
        return view('employee.addproduct');
    }
    function store(Request $req){
        $user = new Product();
        $user->pname = $req->pname;
        $user->quantity =  $req->quantity;
        $user->price=  $req->price;

        if($user->save()){
            $req->session()->flash('pmsg', 'Product Added Successfully');
            //return redirect()->route('create');
            return redirect('/addproduct');
        }else{
            $req->session()->flash('pmsg', 'Something Wrong');
            return redirect('/addproduct');
            
        }
    }


}
