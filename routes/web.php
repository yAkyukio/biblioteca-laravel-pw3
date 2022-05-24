<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Produto;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-produto', function(Request $request){
    //dd($request->all());

    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo "<script>document.location.href = 'listar-produto'</script>";
});

Route::get('/listar-produto', function(){
    //dd(Produto::find($id)); //degub and die
    $produto = Produto::get();
    return view('listar', ['produto' => $produto]);
});

Route::get('/editar-produto/{id}', function($id){
    //dd(Produto::find($id)); //degub and die
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});

Route::post('/editar-produto/{id}', function(Request $request, $id){
    //dd($request->all());
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);

    echo "Produto editado com sucesso!";
});

Route::get('/excluir-produto/{id}', function($id){
    //dd($request->all());
    $produto = Produto::find($id);
    $produto->delete();

    echo `
    <button onclick="document.location.href = 'listar-produto' ">
    Voltar para listar
    </button>
    `;
});