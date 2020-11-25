<?php

use App\Http\Controllers\MeuControlador;
use App\Http\Controllers\ClienteControlador;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/', function () {
    return view('welcome');
});

//Criando uma rota
// Route::get('/teste', function () {
//     echo "Olá!";
// });
//------------------------------------------------------------------------------

//Rotas com parâmetro
// Route::get('/teste/{nome}', function ($nome) {
//     echo "Olá! Seja bem vindo $nome!";
// });
//------------------------------------------------------------------------------

//Rota com parâmetro opcional
// Route::get('/seunome/{nome?}', function ($nome=null) {
//     if (isset($nome))
//         return "Olá! Seja bem vindo, $nome";
//     return "Você não digitou nenhum nome.";
// });
//------------------------------------------------------------------------------

//Rota com parâmetro com regras
// Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
//     for ($i=0; $i < $n; $i++) { 
//         echo "Olá! Seja bem vindo, $nome! <br>";
//     }
// })  ->where('nome', '[A-Za-z]+')
//     ->where('n', '[0-9]+');
//------------------------------------------------------------------------------

//Agrupamento de rotas
// Route::prefix('/app')->group(function() {
    
//     Route::get('/', function () {
//         return view('app');
//     });

//     Route::get('/user', function () {
//         return view('user');
//     });

//     Route::get('/profile', function () {
//         return view('profile');
//     });
// });
//------------------------------------------------------------------------------

//Nomeando rotas
/* Route::prefix('/aplicacao')->group(function() {
    
    Route::get('/', function () {
        return view('app');
    })->name('app');

    Route::get('/user', function () {
        return view('user');
    })->name('app.user');

    Route::get('/profile', function () {
        return view('profile');
    })->name('app.profile');
}); */
//------------------------------------------------------------------------------

//Redirecionamento de requisições
/* Route::get('/produtos', function () {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook </li>";
    echo "<li>Impressora </li>";
    echo "<li>Mouse </li>";
    echo "</ol>";
})->name('meusprodutos');

Route::redirect('todosprodutos1', 'produtos', 301);

Route::get('todosprodutos2', function () {
    return redirect()->route('meusprodutos');
}); */

//Método http
/* Route::post('/requisicoes', function (Request $request) {
    return 'Hello POST';
}); */

//------------------------------------------------------------------------------

//Controladores
/* Route::get('produtos', [MeuControlador::class, 'produtos']);
Route::get('nome', [MeuControlador::class, 'getNome']);
Route::get('idade', [MeuControlador::class, 'getIdade']);
Route::get('multiplicar/{n1}/{n2}', [MeuControlador::class, 'multiplicar']); */

Route::get('produtos', function() {
    return view('outras.produtos');
})->name('produtos');

Route::get('departamentos', function() {
    return view('outras.departamentos');
})->name('departamentos');

Route::resource('clientes', ClienteControlador::class);

Route::get('opcoes/{opcao?}', function ($opcao=null) {
    return view('outras.opcoes', compact(['opcao']));
})->name('opcoes');

Route::get('bootstrap', function () {
    return view('outras.exemplo');
});