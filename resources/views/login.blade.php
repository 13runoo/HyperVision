<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HyperVision</title>
    <link rel="stylesheet" href="../css/LoginStyle.css">
</head>


<div class="container">
        <img class="logo" src="../imgs/logopng.png" alt="Logo HyperVision">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
             <p>{{ $error }}</p>
             @endforeach

        @endif
        <form action="{{route('login')}}" method="post">
            @csrf
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit">Login</button>
        </form>
        <p><a href="{{route('register')}}">Não tem uma conta? Cadastre-se aqui</a></p>
    </div>

   
</body>
</html>