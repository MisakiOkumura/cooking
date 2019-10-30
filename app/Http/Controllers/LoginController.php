<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    
     public function loginc(Request $request){
        $a=['email'=> $request->email , 'password'=>$request->password]; 
        $items =DB::select('select * from users where email = :email and password = :password',$a);
        
        //ログイン成功（メールアドレスとパスが存在）
        if (count($items)>0){
            $b=['name' => $items[0]->name];
            $request->session()->put('name',$items[0]->name);
            return view('loginc',$b);
        //ログインができない（ログイン画面に戻る）
        } else {
            return redirect('login');
        }
    }
}
