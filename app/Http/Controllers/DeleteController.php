<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(){
        return view ('delete.delete');
    }
        
     public function deletec(Request $request){
        $b=['name'=> $request -> name,'email'=> $request->email, 'password'=>$request->password];
        DB::delete('delete from users where name = :name and email = :email and password = :password',$b);
        
        return view('delete.deletec');
     }
}