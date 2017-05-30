<?php

namespace App\Http\Controllers;

use App\Lista;
use App\Filme;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listas = Lista::all();
        return view('listas.index', compact('listas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('listas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $listas = new Lista;
        $listas->nome = $request->nome;
        $listas->usuario_id = $request->usuario_id;
        $listas->save();
        return redirect('listas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function show(Lista $lista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function edit(Lista $lista)
    {
        $listas = Lista::find($lista);
        return view('listas.edit', compact('listas')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lista $lista)
    {
        $listas = Lista::find($lista->id);
        $listas->nome = $request->nome;
        $listas->save();
        return redirect('listas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lista $lista)
    {
        $listas = Lista::find($lista->id);
        $listas->delete();
        return redirect('listas');
    }

    public function addlista()
    {
        $filmes = Filme::all();
        $listas = Lista::all();
        return view('listas.addlista', compact('listas'),  compact('filmes'));
    }


}
