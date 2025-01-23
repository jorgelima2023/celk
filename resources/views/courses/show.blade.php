@extends('layouts.admin')

@section('content')

<h2>Detalhe do curso</h2>

@if (session('success'))
    <p style="color: #082">
        {{ session('success') }}
    </p>
@endif

    <a href="{{ route('courses.index') }}">Listar</a><br>
    <a href="{{ route('courses.edit', ['course' => $course->id ] ) }}">Editar</a><br>

    ID: {{ $course->id }}<br>
    Nome: {{ $course->name }}<br>
    Preço:{{ 'R$ ' . number_format($course->price, 2, ',', '.' ) }}<br>
    Cadastrado: {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}<br>
    Editado: {{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}<br>

@endsection
