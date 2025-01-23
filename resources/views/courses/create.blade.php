@extends('layouts.admin')

@section('content')

<h2>Cadastrar o curso</h2>
<a href="{{ route('courses.index') }} ">Listar</a><br><br>

@if (session('success'))
    <p style="color: #082">
        {{ session('success') }}
    </p>
@endif


@if ($errors->any())
    <span style="color: #f00">
        @foreach ( $errors->all() as $error )
            {{ $error }}<br>
        @endforeach
    </span>
@endif

    <!-- 
    @csrf csrf protecao dados
    @method('POST') reforcar quanto ao uso do metodo post, fins didaticos.
    pois no form ja esta passando o metodo.  
    -->
<form action="{{ route('courses.store') }}" method="POST" >
    @csrf
    @method('POST')

    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" placeholder="Nome do Curso" value="{{ old('name') }}" ><br><br>
    
    <label for="name">Preço:</label>
    <input type="text" name="price" id="price" placeholder="Preço do Curso, ex.: 999.99" value="{{ old('price') }}" ><br><br>
    
    <button type="submit">Cadastrar</button>
</form>

@endsection

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celk create curso</title>
</head>
<body>
    <h2>Cadastrar o curso</h2>
    <a href="{{ route('courses.index') }}">Listar</a><br>
</body>
</html> -->