<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    $profissionais = App\Models\Profissional::all();
    $estabelecimentos = App\Models\Estabelecimento::all();
    $servicos = App\Models\Servico::all();
    return view('pagina_inicial',compact('profissionais','estabelecimentos','servicos'));
});

Route::get('/profissionais/{id}', function ($id) {
    $profissional = App\Models\Profissional::find($id);
    return view('profissional', compact('profissional'));
});

Route::get('/profissionais', function () {
    $profissionais = App\Models\Profissional::all();
    return view('profissionais', compact('profissionais'));
});

Route::get('/estabelecimentos', function () {
    $estabelecimentos = App\Models\Estabelecimento::all();
    return view('estabelecimentos', compact('estabelecimentos'));
});



Route::resource('postagens', PostController::class)->only([
    'index', 'show'
]);

Route::get('/postagens/autores/{id}',[PostController::class, 'buscarPorAutores'])->name('postagens.autores');
Route::get('/postagens/categorias/{id}',[PostController::class, 'buscarPorCategorias'])->name('postagens.categorias');
Route::get('/postagens/{id}/publicar',[PostController::class, 'publicar'])->name('postagens.publicar');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
});//*/
