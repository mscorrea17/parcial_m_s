@extends('layouts.layout')

@section('title', 'Lista de Asistencias')

@section('content')
    <h1 class="mb-4">Lista de Asistencias</h1>
    <a href="{{ route('asistencias.create') }}" class="btn btn-primary mb-3">Registrar Asistencia</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Empleado</th>
                <th>Fecha</th>
                <th>Hora de Entrada</th>
                <th>Hora de Salida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asistencias as $asistencia)
                <tr>
                    <td>{{ $asistencia->empleado->nombre }} {{ $asistencia->empleado->apellido }}</td>
                    <td>{{ $asistencia->fecha }}</td>
                    <td>{{ $asistencia->hora_entrada }}</td>
                    <td>{{ $asistencia->hora_salida ?? 'No registrada' }}</td>
                    <td>
                        <a href="{{ route('asistencias.edit', $asistencia->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('asistencias.destroy', $asistencia->id) }}" method="POST" class="d-inline">
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
