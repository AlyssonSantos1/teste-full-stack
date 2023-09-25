<?php

use App\Http\Controllers\Controller;
use App\Models\Cerveja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/cadastro-cervejas',[Controller::class,'cadastrarcerveja'])->name('cadastro-cervejas');

// Route::get('/cadastro-cervejas',[Controller::class,'cadastrarcerveja']);

Route::post('/cadastro-cervejas', function (Request $dados){
    // dd($dados->all());
    Cerveja::create([
        'nome' => $dados->nome_cerveja,
        'tipo' => $dados->tipo_cerveja,
        'teoralcolico' => $dados->teor_cerveja,
        'preco' => $dados->preco_cerveja,
        'quantidade' => $dados->estoque_cerveja,


    ]);
    echo "Cerveja criada com sucesso!";



})->name('cadastro-cervejas');

Route::get('/mostrar-cervejas/{id_da_cerveja}', function ($id_cerveja){
    // dd(Cerveja::find($id_cerveja));
    $Cerveja = Cerveja::findorfail($id_cerveja);
    echo $Cerveja->nome;
    echo "<br/>";
    echo $Cerveja->tipo;
    echo "<br/>";
    echo $Cerveja->teoralcolico;
    echo "<br/>";
    echo $Cerveja->preco;
    echo "<br/>";
    echo $Cerveja->quantidade;
    echo "<br/>";
    // echo $Cliente->cpf;
    // echo "<br />";
    // echo $Cliente->data;
    // echo "<br />";
    // echo $Cliente->cidade;
    // echo "<br />";
    //rota apenas se eu nao quiser mostrar alguns atributos ou se eu quiser posso mostrar todos
    //dd($id_cliente);
});

Route::get('/editar-cervejas/{id_da_cerveja}', function ($id_cerveja){
    $Cerveja = Cerveja::findorfail($id_cerveja);
    return view('editarcerveja', ['cerveja' => $Cerveja]);
});

Route::put('/atualizar-cervejas/{id_da_cerveja}', function (Request $informacao, $id_cerveja){
    $Cerveja = Cerveja::findorfail($id_cerveja);
    $Cerveja->nome = $informacao->nome_cerveja;
    $Cerveja->tipo = $informacao->tipo_cerveja;
    $Cerveja->teoralcolico = $informacao->teor_cerveja;
    $Cerveja->preco = $informacao->preco_cerveja;
    $Cerveja->quantidade = $informacao->estoque_cerveja;

    $Cerveja->save();
    echo "Cerveja atualizada com sucesso!";

});

Route::get('/excluir-cervejas/{id_da_cerveja}', function ($id_cerveja){
    $Cerveja = Cerveja::findorfail($id_cerveja);
    $Cerveja->delete();

    echo "Cerveja excluida do Cadastro!";
});

Route::get('/exibir-cervejas', function (Request $informacao) {
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
});





