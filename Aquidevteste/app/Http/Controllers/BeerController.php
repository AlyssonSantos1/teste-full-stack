<?php

namespace App\Http\Controllers;

use App\Models\Cerveja;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createbeer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $dados)
    {
        Cerveja::create([
            'nome' => $dados->nome_cerveja,
            'tipo' => $dados->tipo_cerveja,
            'teoralcolico' => $dados->teor_cerveja,
            'preco' => $dados->preco_cerveja,
            'quantidade' => $dados->estoque_cerveja,


        ]);
        echo "Cerveja criada com sucesso!";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $beer = Cerveja::findorfail($id);
        return view('showbeer', ['cerveja'=>$beer]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        $beer = Cerveja::findorfail($id);
        return view('editarcerveja', ['cerveja'=>$beer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $informacao, string $id)

    {
        $cerveja = Cerveja::findorfail($id);
        $cerveja->nome = $informacao->nome_cerveja;
        $cerveja->tipo = $informacao->tipo_cerveja;
        $cerveja->teoralcolico = $informacao->teor_cerveja;
        $cerveja->preco = $informacao->preco_cerveja;
        $cerveja->quantidade = $informacao->estoque_cerveja;
        $cerveja->save();
        echo "Cerveja atualizada com sucesso!";

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
