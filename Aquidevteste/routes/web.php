<?php

use App\Http\Controllers\BeerController;
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

Route::get('/', [BeerController::class, 'index']);
Route::get('/cadastro-cervejas', [BeerController::class, 'create']);
Route::post('/cadastro-cervejas', [BeerController::class, 'store'])->name('/cadastro-cervejas');
Route::get('/mostrar-cervejas/{id}', [BeerController::class, 'show']);
Route::get('/editar-cervejas/{id}', [BeerController::class, 'edit']);
Route::put('/atualizar-cervejas',[BeerController::class, 'update'])->name('/atualizar-cervejas');
Route::get('/excluir-cervejas/{id}',[BeerController::class, 'destroy']);


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





