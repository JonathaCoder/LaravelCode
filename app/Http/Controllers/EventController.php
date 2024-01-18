<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
   public function index(){
    $nome = "jonatha";
    $idade = 10;
    $arr = [1,2,3,5,5,5];
    $nomes = ['jonatha','karen','joao'];
    return view('welcome',
    [
     'nome' => $nome,
     'idade'=>$idade,
     'arr' => $arr,
     'nomes' => $nomes,
    ]);
   }

   public function create(){
       return view('events.create');
   }

   public function contato(){
      return view('contact');
   }
   public function produto(){
    $busca = request('search');

    return view('products', ['busca' => $busca]);
   }
  
}
