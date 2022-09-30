<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product{
    var $name;
    function __construct($name){
       $this-> name = $name;
       
    }
 }

class PagesController extends Controller
{
    //
    public function home(){
        $message = "Welcome to home page";
        return view('home')->with('message', $message);
    }
    
    public function product(){

    $p1=new product("Books");
    $p2=new product("Pen");
    $p3=new product("Laptop");
    $p4=new product("Mobile");
    $p5=new product("RAM");

    $abc=array($p1,$p2,$p3,$p4,$p5);
    return view('product',["product"=>$abc ]);
    }

    

    public function teams(){
        $message = "Our Teams";
        return view('teams')->with('message', $message);
    }

    public function about(){
        $message = "About us";
        return view('about')->with('message', $message);
    }
    public function contact(){
        $message = "Contact us";
        return view('contact')->with('message', $message);
    }
   
}
