@extends('layouts.layout')

@section('content')
    <h1>Bienvenido al Dashboard</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Gestión de Empleados</h5>
            <p class="card-text">Administra los empleados de la empresa.</p>
            <a href="{{ route('empleados.index') }}" class="btn btn-primary">Ir a Empleados</a>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Gestión de Departamentos</h5>
            <p class="card-text">Administra los departamentos de la empresa.</p>
            <a href="{{ route('departamentos.index') }}" class="btn btn-primary">Ir a Departamentos</a>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Gestión de Asistencias</h5>
            <p class="card-text">Administra las asistencias de los empleados.</p>
            <a href="{{ route('asistencias.index') }}" class="btn btn-primary">Ir a Asistencias</a>
        </div>
    </div>
@endsection
