<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    
    public function question(){
        
        return view('question.question');
    }
    
     public function questione(Request $request){
        
        $validate_rule =[
            'name' => 'required',
            'email' => 'email',
            'comment' =>'filled'];
            
        $a=['name'=> $request-> name,'email'=> $request -> email, 'comment'=> $request -> comment];
        
        $this->validate($request,$validate_rule);
        
        return view('question.questione',$a);
    }
    
    public function questionc(){
    
        return view('question.questionc');
    }
}

