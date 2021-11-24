<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Criar  Tarefa</h1>

    <form action="{{ url('/tarefas/salvar') }}" method="POST">
        @csrf
        <input type="text" name="nome">
        <input type="text" name="descricao">
        <button type="submit">Enviar</button>
    </form> 

    <a href="{{ route('tarefa.inicio') }}">Voltar</a>

</body>
</html>