@extends('layouts.dashboard.main')

@section('main-content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Criar Tarefa</h1>
    
</div>

<div class="row">
    <div class="col">

        <form action="{{ url('/tarefas/salvar') }}" method="POST">
            @csrf
            <input type="text" name="nome">
            <input type="text" name="descricao">
            <button type="submit">Enviar</button>
        </form> 

        <a href="{{ route('tarefa.inicio') }}">Voltar</a>

    </div>
</div>
    
@endsection