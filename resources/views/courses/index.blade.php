@extends('layouts.admin')

@section('content')

    <h2>Listar os cursos</h2>
    
    <a href="{{ route('courses.create') }}">Cadastrar</a><br>
    <br>
    @if (session('success'))
    <p style="color: #082">
        {{ session('success') }}
    </p>
    @endif

    {{-- imprimir os registros --}}
    {{-- funcao number_format separa 'virgula' e depois 'milhar' --}}

    @forelse ($courses as $course)
        Id:{{ $course->id }}<br>
        Nome:{{ $course->name }}<br>
        Preço:{{ 'R$ ' . number_format($course->price, 2, ',', '.' ) }}<br>
        Cadastrado:{{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}<br>
        Editado:{{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}<br>

        <a href="{{ route('courses.show', ['course' => $course->id ]) }}">
            <button type="button">Visualizar</button>
        </a>
        <a href="{{ route('courses.edit', ['course' => $course->id ]) }}">
            <button type="button">Editar</button>
        </a>
        <form action="{{ route('courses.destroy', ['course' => $course->id ]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('Tem certeza que deseja apagar este registro.')">Apagar</button>
        </form>
        <br>
        <hr>
    @empty
    <p style="color: #f00">Nenhum curso encontrado!</p>
    @endforelse

    {{-- {{ $courses->links() }} --}}
@endsection
