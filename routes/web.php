<?php

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

// localhost:8000/

Route::get('/', function () {
    //helper
    return view('welcome');
});

Route::get('/tarefas', function(){

    $nome = "Romerito Campos";    

    return view('tarefa.home', ['nome' => $nome]);
})->name('tarefa.inicio');

Route::get('/tarefas/criar', function(){
    return view('tarefa.create');
})->name('tarefa.criar');

Route::post('/tarefas/salvar', function(Request $request){

    $nome = $request->post('nome');
    $descricao = $request->post('descricao');

    //processar alguma coisa
    //salvar no banco de dados
    return $nome . ":" . $descricao;
})->name('tarefa.salvar');

Route::get('/tarefas/mostrar/{id}' , function($id){

    return "Mostrando a tarefa: " . $id;

});


Route::get('/sbadmin', function(){
    return view('layout.sbadmin');
});
