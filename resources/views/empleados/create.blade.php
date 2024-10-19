@extends('layouts.layout')

@section('title', 'Crear Empleado')

@section('content')
    <h1>Crear Empleado</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}">
        </div>
        <div class="mb-3">
            <label for="posicion" class="form-label">posicion</label>
            <input type="text" class="form-control" id="posicion" name="posicion" value="{{ old('posicion') }}">
        </div>
        <div class="mb-3">
            <label for="departamento_id" class="form-label">Departamento</label>
            <select class="form-control" id="departamento_id" name="departamento_id">
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha_contratacion" class="form-label">Fecha de Contratación</label>
            <input type="date" class="form-control" id="fecha_contratacion" name="fecha_contratacion" value="{{ old('fecha_contratacion') }}">
        </div>
        <div class="mb-3">
            <label for="salario" class="form-label">Salario</label>
            <input type="number" class="form-control" id="salario" name="salario" value="{{ old('salario') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
