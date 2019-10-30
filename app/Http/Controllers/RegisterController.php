<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Register(){
        return view ('register.register');
    }
    
    public function confirm(Request $request){
       
        $a=['name'=> $request -> name,'email'=> $request->email, 'password'=>$request->password]; 
        return view('register.confirm',$a);
    }
    
    public function complete(Request $request){
        $b=['name'=> $request -> name,'email'=> $request->email, 'password'=>$request->password];
        $items=DB::insert('insert into users (name,email,password) values (:name,:email,:password)',$b);
        return view ('register.complete');
    }
    
}
