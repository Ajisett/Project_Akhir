<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajisetyoController extends Controller
{
   public function index(){
      return view('ajisetyo/home');
    }

    public function show($id){
      $nilai = 'ini adalah linknya : ' . $id;
       return view('ajisetyo/single', ['ajisetyo/ajisetyo' => $nilai]);
     }
}
