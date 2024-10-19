@extends('layouts.layout')

@section('title', 'Registrar Asistencia')

@section('content')
    <h1>Registrar Asistencia</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('asistencias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="empleado_id" class="form-label">Empleado</label>
            <select class="form-control" id="empleado_id" name="empleado_id">
                @foreach ($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }} {{ $empleado->apellido }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}">
        </div>
        <div class="mb-3">
            <label for="hora_entrada" class="form-label">Hora de Entrada</label>
            <input type="time" class="form-control" id="hora_entrada" name="hora_entrada" value="{{ old('hora_entrada') }}">
        </div>
        <div class="mb-3">
            <label for="hora_salida" class="form-label">Hora de Salida (Opcional)</label>
            <input type="time" class="form-control" id="hora_salida" name="hora_salida" value="{{ old('hora_salida') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
