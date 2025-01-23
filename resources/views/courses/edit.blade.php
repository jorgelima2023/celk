@extends('layouts.admin')

@section('content')

<h2>Editar do curso</h2>
    <a href="{{ route('courses.index') }}">Listar</a><br><br>
    <a href="{{ route('courses.show', ['course' => $course->id ]) }}">Visualizar</a><br><br>

    @if ($errors->any())
        <span style="color: #f00">
            @foreach ( $errors->all() as $error )
                {{ $error }}<br>
            @endforeach
        </span>
    @endif

    <form action="{{ route('courses.update', ['course' => $course->id ]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="">Nome:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $course->name)}}" placeholder="nome do curso" require><br><br>

        <label for="">Preço:</label>
        <input type="text" name="price" id="price" value="{{ old('price', $course->price)}}" placeholder="preco do curso" require><br><br>

        <button type="submit">Salvar</button>
    </form>
@endsection
