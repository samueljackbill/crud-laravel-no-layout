<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>
</head>
<body>

    <a href="{{ route('user.index') }}">Listar</a><br>
    
    <h2>Cadastrar Usuário</h2>

    @if ($errors->any())        
        @foreach ($errors->all() as $error)
            <p style="color: #f00">
                {{ $error }}
            </p>
        @endforeach
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="name">Nome: </label>
        <input type="text" name="name" placeholder="Nome completo" value="{{ old('nome') }}"><br><br>

        <label for="email">E-mail: </label>
        <input type="email" name="email" placeholder="Melhor e-mail do usuário" value="{{ old('email') }}"><br><br>

        <label for="password">Senha: </label>
        <input type="password" name="password" placeholder="Senha com mínimo 6 caracteres" value="{{ old('password') }}"><br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>
</html>