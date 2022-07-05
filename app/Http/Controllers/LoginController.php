<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Coleta;

class LoginController extends Controller{
/**///LOGIN PARA DOADOR

    public function loginUser(){return view('login');}
    public function userlogin(Request $request){
       $credentials = $request->validate([
                     'email'=>['required','email'],
                     'password'=>['required'],
        ],[
            'email.required'=>'email obrigatorio',
            'password.required'=>'senha obrigatoria'
        ]);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
             return redirect('/Dashboard');
        }else{
            return back()->withErrors([
            'email' => 'email ou senha incorretas.',
            ]);
        }
    }
/**///LOGIN PARA PONTO DE COLETA

    public function loginColeta(){return view('coleta.login');}
    public function coletalogin(Request $request){
      $credentials = $request->validate([
                     'email'=>['required','email'],
                     'password'=>['required'],
        ],[
            'email.required'=>'email obrigatorio',
            'password.required'=>'senha obrigatoria'
        ]); 
        if (Auth::attempt($credentials)){
            if(auth()->user()->Coleta == 1){
                $request->session()->regenerate();
                return redirect('/Dashboard/Coleta');
            }else{return redirect()
                  ->with(['email'=>'Somente pontos de coleta são autorizados!']);}
               
        }else{
            return back()->withErrors([
            'email' => 'email ou senha incorretas.',
            ]);
        }
    }
/**///LOGOUT

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
     
}
