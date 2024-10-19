@extends('layouts.layout')

@section('title', 'Lista de Departamentos')

@section('content')
    <h1 class="mb-4">Lista de Departamentos</h1>
    <a href="{{ route('departamentos.create') }}" class="btn btn-primary mb-3">Crear Departamento</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>ubicacion</th>
                <th>Número de Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento->nombre }}</td>
                    <td>{{ $departamento->ubicacion }}</td>
                    <td>{{ $departamento->numero_telefono }}</td>
                    <td>
                        <a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('departamentos.destroy', $departamento->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
