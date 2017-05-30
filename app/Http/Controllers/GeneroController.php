<?php

namespace App\Http\Controllers;

use App\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    
    public function index()
    {
        $generos = Genero::all();
        return view('generos.index', compact('generos'));
    }

   
    public function create()
    {
        return view('generos.create');
    }

    
    public function store(Request $request)
    {
        $generos = new Genero;
        $generos->nome = $request->nome;
        $generos->save();
        return redirect('generos');
    }

    
    public function show(Genero $genero)
    {
        //
    }

   
    public function edit(Genero $genero)
    {
        $generos = Genero::find($genero);
        return view('generos.edit', compact('generos')); 
    }

    
    public function update(Request $request, Genero $genero)
    {
        $generos = Genero::find($genero->id);
        $generos->nome = $request->nome;
        $generos->save();
        return redirect('generos');
    }

   
    public function destroy(Genero $genero)
    {
        $generos = Genero::find($genero->id);
        $generos->delete();
        return redirect('generos');
    }
}
