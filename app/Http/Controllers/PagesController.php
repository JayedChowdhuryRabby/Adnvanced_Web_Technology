<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class product{
    var $name;
    function __construct($name){
       $this-> name = $name;
       
    }
 }

class PagesController extends Controller
{
    function login()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }
    function Validate_registration(Request $request)
    {
        $validate = $request->validate([
            "name"=>"required|min:5|max:200",
            'email'=>"required|email",
            'password'=>'required|min:6'
        ],
        ['name.required'=>"Please put you name here"],
       
       
    );
    $data=$request->all();
    user::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
    
    ]);
    return redirect('login')->with('success','Registration Completed');
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    function Validate_login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
         $credentials=$request->only('email','password');
         if(Auth::attempt($credentials))
         {
            return redirect('home');
         }
         return redirect('login')->with('success','Login details are not valid');

    }



    public function home(){
        if(Auth::check())
        {
        $message = "Welcome to home page";
        return view('home')->with('message', $message);
        }
        return redirect->with('success','You are not allowed to success');
    }
    
    public function product(){
    if(Auth::check()){

    $p1=new product("Books");
    $p2=new product("Pen");
    $p3=new product("Laptop");
    $p4=new product("Mobile");
    $p5=new product("RAM");

    $abc=array($p1,$p2,$p3,$p4,$p5);
    return view('product',["product"=>$abc ]);
        }
    }

    

    public function teams(){
        if(Auth::check()){
        $message = "Our Teams";
        return view('teams')->with('message', $message);
        }
    }

    public function about(){
        if(Auth::check()){
        $message = "About us";
        return view('about')->with('message', $message);
        }
    }
    public function contact(){
        if(Auth::check()){

            return view('contact');
        }
    }

    function Validate_contact(Request $request)
    {
        $validate = $request->validate([
            "name"=>"required|min:5|max:200",
            "messege"=>"required",
            'subject'=>'required',
            'dob'=>'required',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        ['name.required'=>"Please put you name here"]
    );
        return $request;
    }
   
}
