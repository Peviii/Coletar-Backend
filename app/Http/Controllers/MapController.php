<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Coleta;

class MapController extends Controller{
  
  public function index(){

    $search = request('search');  
      if($search){
        $coletas = Coleta::where([
           ['name','like','%'.$search.'%']
        ])->orWhere([
           ['city','like','%'.$search.'%']
        ])->orWhere([
           ['neighborhood','like','%'.$search.'%']
        ])->get();
      }else{
        $coletas = Coleta::all();
    }
    return view('home',['coletas'=>$coletas,'search'=>$search]);
  }

  public function show($id){
      $coleta = Coleta::find($id);
      return view('show',['coleta'=>$coleta]); 
  } 
}
