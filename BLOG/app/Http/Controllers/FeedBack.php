<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FeedBack extends Controller
{
    public function Feedback(){
        return view('FeedBack');
    }
        public function CreateFeedback(Request $request){
        //test
            DB::table('feedbacks')->insert([
                'name'=>$request->input('name'),
                'surname'=>$request->input('surname'),
                'email'=>$request->input('email'),
                'need'=>$request->input('need'),
                'message'=>$request->input('message'),
            ]);

            return redirect()->route('feedback');




        }
    public function postFeedback(Request $request){
           return $request->validate([
               'name' => 'required|min:3',
               'surname' => 'required|',
               'need'=>'required',
               'mail' => 'required|email',
               'message' => 'required|min:3|max:240',
           ]);
    }
}
