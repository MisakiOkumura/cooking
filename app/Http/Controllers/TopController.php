<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function top(Request $request){
        $b=['name' => $request->session()->get('name')];
        return view('top',$b);
    }
    
    
}
