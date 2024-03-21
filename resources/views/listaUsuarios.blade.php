<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/ListaUsuarios.css">
<title>Lista de Usuários Cadastrados</title>
</head>
<body>
<div class="container">
    <h1>Lista de Usuários Cadastrados</h1>
    @foreach ($users->all() as $user)
    <ul id="user-list">

    </ul>
    <div>
        <p>{{$user->firstname}}</p>
        <button class="btn" id="add-user-btn">Adicionar Usuário</button>
        <a href="{{route('user.delete', $user->id)}}" class="btn remove" id="remove-user-btn">Remover Usuário</a>
    </div>
    @endforeach
</div>
</body>
</html>
