@extends('layouts.layout')

@section('title', 'Editar Asistencia')

@section('content')
    <h1>Editar Asistencia</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('asistencias.update', $asistencia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="empleado_id" class="form-label">Empleado</label>
            <select class="form-control" id="empleado_id" name="empleado_id">
                @foreach ($empleados as $empleado)
                    <option value="{{ $empleado->id }}" {{ $empleado->id == $asistencia->empleado_id ? 'selected' : '' }}>
                        {{ $empleado->nombre }} {{ $empleado->apellido }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha', $asistencia->fecha) }}">
        </div>
        <div class="mb-3">
            <label for="hora_entrada" class="form-label">Hora de Entrada</label>
            <input type="time" class="form-control" id="hora_entrada" name="hora_entrada" value="{{ old('hora_entrada', $asistencia->hora_entrada) }}">
        </div>
        <div class="mb-3">
            <label for="hora_salida" class="form-label">Hora de Salida (Opcional)</label>
            <input type="time" class="form-control" id="hora_salida" name="hora_salida" value="{{ old('hora_salida', $asistencia->hora_salida) }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
