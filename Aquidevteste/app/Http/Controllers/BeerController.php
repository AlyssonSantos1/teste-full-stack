<?php

namespace App\Http\Controllers;

use App\Models\Cerveja;
use Illuminate\Http\Request;

class BeerController extends Controller
{

    public function index()
    {
        return view('welcome');
    }


    public function create()
    {
        return view('createbeer');
    }


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


    public function show(string $id)
    {
        $beer = Cerveja::findorfail($id);
        return view('showbeer', ['cerveja'=>$beer]);

    }


    public function edit(Request $request)
    {
        $beer = Cerveja::findorfail($request->id);
        return view('editarcerveja', ['cerveja'=>$beer]);

    }


    public function update(Request $informacao)

    {

        $cerveja = Cerveja::findorfail($informacao->id);
        $cerveja->nome = $informacao->nome_cerveja;
        $cerveja->tipo = $informacao->tipo_cerveja;
        $cerveja->teoralcolico = $informacao->teor_cerveja;
        $cerveja->preco = $informacao->preco_cerveja;
        $cerveja->quantidade = $informacao->estoque_cerveja;
        $cerveja->save();
        echo "Cerveja atualizada com sucesso!";

    }


    public function destroy(string $id)
    {
        $Cerveja = Cerveja::findorfail($id);
        $Cerveja->delete();
        echo "Cerveja excluida do Cadastro!";
    }


    public function list(Request $informacao)
    {
        $Cerveja = Cerveja::select('nome', 'tipo','teoralcolico', 'preco', 'quantidade')->get();

        foreach ($Cerveja as $Cerveja) {
            echo "Nome: " . $Cerveja->nome . "<br>";
            echo "cpf: " . $Cerveja->tipo . "<br>";
            echo "data: " . $Cerveja->teoralcolico . "<br>";
            echo "sexo: " . $Cerveja->preco . "<br>";
            echo "cidade: " . $Cerveja->quantidade . "<br>";
            echo "<br>";
        }
        echo "Listagem completa das Cervejas no Cadastro! ;)";
    }
}
