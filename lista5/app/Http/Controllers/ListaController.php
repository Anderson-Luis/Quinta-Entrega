<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lista;

class ListaController extends Controller
{
    public function index() {
        $lista = Lista::all();

        return view('welcome', ['lista' => $lista]);
    }

    public function store(Request $request) {
        $lista = new Lista;

        $lista->nome = $request->nome;
        $lista->numero = $request->numero;
      
        $lista->save();

        return redirect('/');
    }

    public function consulta() {
        $lista = Lista::all(); 

        return view('consulta',['lista' => $lista]);
    }    

}
