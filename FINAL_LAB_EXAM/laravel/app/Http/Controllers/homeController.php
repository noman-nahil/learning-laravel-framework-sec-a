<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    function index(Request $req){
        /*$data = ['id'=>123,'name'=>'Noman'];
       return view('home.index',$data);*/
       
       /*return view('home.index')
       ->with('id','1234')
       ->with('name','xyz');*/

       /*return view('home.index')
       ->withId('1234')
       ->withName('xyz');*/
      
       /*if($req->session()->has('username')){
        $id= 123;
        $name = $req->session()->get('username');
        return view('home.index',compact('id','name'));
       }
       else{
        $req->session()->flash('msg', 'invalid Request');
        return redirect('/login');
       }*/
       $id= 123;
        $name = $req->session()->get('username');
        return view('home.index',compact('id','name'));
      
    }
    function create(){
        return view('home.create');
    }
    function addproduct(){
        return view('home.addproduct');
    }
    function productlist(){
        return view('home.productlist');
    }

}
