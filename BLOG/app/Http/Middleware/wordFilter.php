<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class wordFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $kotuKelime=['Salak','Aptal','Gerizekalı','Enayi','Embesil','Mal'];
        if(in_array($request->name,$kotuKelime)){
            return redirect()->back()->withErrors("Kötü ifadeler içeren kelimeler kullanamazsınız!.");
        }
        else if(in_array($request->surname,$kotuKelime)){
            return redirect()->back()->withErrors("Kötü ifadeler içeren kelimeler kullanamazsınız!.");
        }
        else if(in_array($request->mail,$kotuKelime)){
            return redirect()->back()->withErrors("Kötü ifadeler içeren kelimeler kullanamazsınız!.");
        }
        else if(in_array($request->message,$kotuKelime)){
            return redirect()->back()->withErrors("Kötü ifadeler içeren kelimeler kullanamazsınız!.");
        }


        return $request->validate([
            'name' => 'required|min:3',
            'surname' => 'required|',
            'need'=>'required',
            'email' => 'required|email',
            'message' => 'required|min:3|max:240',
        ]);


        return $next($request);
    }
}
