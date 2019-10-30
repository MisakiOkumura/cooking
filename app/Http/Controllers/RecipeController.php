<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function recipe(){
        return view('recipe.recipe');
    }
    
    public function recipee(Request $request){
        $request->session()->put('title',$request->title);
        $value=$request->session()->get('title');
        $value=['title'=>$request->session()->get('title')];
       return view('recipe.recipee',$value);
    }
    
    public function recipec(Request $request){
        $request->session()->put('zairyou',$request->zairyou);
        $request->session()->put('cook',$request->cook);
        $a=$request->file("file_upload")->store('public');
        $c=str_replace('public/','', $a);
        $request->session()->put('picture',$c);
        $b=['picture'=> $c,'zairyou'=> $request->zairyou,'cook'=> $request -> cook];
        return view('recipe.recipec',$b);
    }
    
    public function recipecon(Request $request){
        $d=[
            'title'=>$request->session()->get('title'),
            'zairyou'=>$request->session()->get('zairyou'),
            'cook'=>$request->session()->get('cook'),
            'picture'=>$request->session()->get('picture')
            ];
        $b=DB::insert('insert into recipe (title,materials,method,picture) values (:title,:zairyou,:cook,:picture)',$d);
        return view('recipe.recipecon');
    }
}
