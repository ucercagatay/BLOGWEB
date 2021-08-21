<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedBack extends Controller
{
    public function Feedback(){
        return view('FeedBack');
    }

    public function postFeedback(Request $request){
        //return $request->post();
        //return $request->all();
        //validator zor olan validasyon şekl dhaa profesyonel
        //basit olan validasyon yöntemi
        /*$request->validate([
            'ad' => 'required|min:3',
            'mail' => 'required|email',
            'sifre' => 'required|min:6|confirmed'
        ]);*/
           return $request->validate([
               'name' => 'required|min:3',
               'surname' => 'required|',
               'need'=>'required',
               'mail' => 'required|email',
               'message' => 'required|min:3|max:240',
           ]);
    }
}
