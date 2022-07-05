<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\notifyUser;
use App\Models\User;
use App\Models\Coleta;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');  
      if($search){
        $users = User::where([
           ['name','like','%'.$search.'%']
        ])->get();
      }else{
        $users = User::all();
    }
    return view('home',['users'=>$users,'search'=>$search]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('cadastro');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'Coleta'=>'required',
            'password' => 'required|between:8,255',
            'password_confirmation' => 'confirmed '
        ]);
        $user = User::create(request(['name', 'email', 'password','Coleta']));
        auth()->login($user);
        if ($user->Coleta == '1') {
            return redirect('/Cadastro-Coleta');
        }else{
        $user->notify(new notifyUser($user));
        return view('verify');
        //return redirect('/Home');
        }    
    }
    public function dashboard(){
        $user = auth()->user();
        return view('dashboard',['user'=>$user]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
      $user = User::find($id);
      return view('show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
