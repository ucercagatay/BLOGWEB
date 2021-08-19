<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedBack extends Controller
{
    public function Feedback(){
        return view('FeedBack');
    }

    public function postFeedback(Request $request){
         $datas=$request->all();
        echo ('Geri bildiriminiz alınmıştır'),'<br>', 'style="color:red"; ','<br>';
         foreach($datas as $data){
           echo $data , '<br>';
         }


    }
}
