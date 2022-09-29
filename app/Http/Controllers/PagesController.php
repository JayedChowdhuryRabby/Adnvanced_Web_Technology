<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $message = "Welcome to home page";
        return view('home')->with('message', $message);
    }
    public function product(){

        $ProductNames=array("Books", "Pen", "Laptop","Keyboard","Mobile");
        return view('product')
        ->with('ProductNames', $ProductNames);
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
