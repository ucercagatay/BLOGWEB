<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class admin extends Controller
{
    public function adminlog(){
        return view('adminlog');
    }
      public function adminPass(Request $request){

          $is_admin=Role::find(User::where('email',$request->email)->first()->role_id)->role_name;

            if($is_admin == 'Admin'){

                    if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,])){

                        return redirect()->route('adminpanel');
                    }
                    return redirect()->route('adminlog')->withErrors('Giris bilgileriniz yanlıştır');
            }
          return redirect()->route('adminlog')->withErrors('Giriş yetkiniz yoktur');
      }





    public function adminpanel(){
        return view('adminlayouts.posts');
    }
}
