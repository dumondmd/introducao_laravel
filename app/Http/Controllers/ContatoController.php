<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Request;

class ContatoController extends Controller
{
   	public function index()
   	{
         $contatos = [
            (object)["nome"=>"Maria", "tel"=>"6189898989"],
            (object)["nome"=>"Pedro", "tel"=>"6256565656"]
         ];
   		return view('contato.index', compact('contatos'));
   	}

   	public function criar(Request $req)
   	{
   		dd($req->all());
   		return "Este é o criar do ContatoController";
   	}

   	public function editar()
   	{
   		return "Este é o editar do ContatoController";
   	}
}
