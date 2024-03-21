<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Conta</title>
<link rel="stylesheet" href="../css/edicao.css">

</head>
<body>

<div class="container">
    <h2>Editar Conta</h2>
    <form action="#" method="post">
    @method('PUT')
        @csrf
        <label for="firstname">Primeiro nome:</label>
        <input type="text" id="firstname" name="firstname" placeholder="Editar Primeiro Nome" value="{{$users->firstname}}" required>

        <label for="lastname">Sobrenome:</label>
        <input type="text" id="lastname" name="lastname" placeholder="Editar Sobrenome" value="{{$users->lastname}}" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Editar E-mail" value="{{$users->email}}" required>

        <label for="number">Celular:</label>
        <input type="text" id="number" name="number" placeholder="Editar Numero de celular" value="{{$users->number}}" required>

        <label for="password">Nova senha:</label>
        <input type="password" id="password" name="password" placeholder="Nova senha" value="{{$users->password}}" required>

        <label for="confirm_password">Confirmar nova senha:</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar nova senha" value="{{$users->password}}" required>

        <input type="submit" value="Salvar Alterações">
    </form>
</div>

</body>
</html>
