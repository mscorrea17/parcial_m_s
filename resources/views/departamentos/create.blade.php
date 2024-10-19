@extends('layouts.layout')

@section('title', 'Crear Departamento')

@section('content')
    <h1>Crear Departamento</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('departamentos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
        </div>
        <div class="mb-3">
            <label for="ubicacion" class="form-label">ubicacion</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}">
        </div>
        <div class="mb-3">
            <label for="numero_telefono" class="form-label">Número de Teléfono</label>
            <input type="text" class="form-control" id="numero_telefono" name="numero_telefono" value="{{ old('numero_telefono') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
