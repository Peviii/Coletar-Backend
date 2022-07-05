<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Coleta;

class ColetaController extends Controller{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('coleta.cadastro');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $coleta = new Coleta;

        $coleta->name = $request->name;
        $coleta->city = $request->city;
        $coleta->neighborhood = $request->neighborhood;
        $coleta->street = $request->street;
        $coleta->number = $request->number;
        $coleta->phone = $request->phone;
        $coleta->info = $request->info; 
        $coleta->itens = $request->itens;
        //IMAGE UPLOAD
        if($request->hasFile('image')&&$request->file('image')->isValid()){
            $requestImg = $request->image;
            $extension = $requestImg->extension();
            $imageName = md5($requestImg->getClientOriginalName()
            .strtotime("now")).".".$extension;
            $requestImg->move(public_path('/img/coletas'),$imageName);
            $coleta->image = $imageName;
        }
        /**************************************/
        $user = auth()->user();
        $coleta->user_id = $user->id;
        $coleta->save();
        /*$user->notify(new notifyUser($user));
        return view('verify');*/
        return redirect('/Dashboard/Coleta')
        ->with('msg','cadastro criado com sucesso');
    }
    public function dashboard(){
        $user = auth()->user();
       $coleta = $user->coleta();
       return view('coleta.dashboard',['user'=>$user,'coleta'=>$coleta]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $coleta = Coleta::find($id);
        return view('coleta.edit',['coleta'=>$coleta]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $data = $request->all();
        /*************IMAGE UPDATE**************/
        if($request->hasFile('image')&&$request->file('image')->isValid()){
            $requestImg = $request->image;
            $extension = $requestImg->extension();
            $imageName = md5($requestImg->getClientOriginalName()
            .strtotime("now")).".".$extension;
            $requestImg->move(public_path('/img/coletas'),$imageName);
            $data['image'] = $imageName;
        }
        /**************************************/
        Coleta::find($id)->update($data);
        return redirect('/Dashboard/Coleta')
        ->with('msg','Ponto de Coleta Atualizado!');
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
