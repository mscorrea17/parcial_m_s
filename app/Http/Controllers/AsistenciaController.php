<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Empleado;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index()
    {
        $asistencias = Asistencia::with('empleado')->get();
        return view('asistencias.index', compact('asistencias'));
    }

    public function create()
    {
        $empleados = Empleado::all();
        return view('asistencias.create', compact('empleados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'empleado_id' => 'required',
            'fecha' => 'required|date',
            'hora_entrada' => 'required|date_format:H:i',
            'hora_salida' => 'nullable|date_format:H:i',
        ]);

        Asistencia::create($request->all());
        return redirect()->route('asistencias.index')->with('success', 'Asistencia registrada correctamente.');
    }

    public function show(Asistencia $asistencia)
    {
        return view('asistencias.show', compact('asistencia'));
    }

    public function edit(Asistencia $asistencia)
    {
        $empleados = Empleado::all();
        return view('asistencias.edit', compact('asistencia', 'empleados'));
    }

    public function update(Request $request, Asistencia $asistencia)
    {
        $request->validate([
            'empleado_id' => 'required',
            'fecha' => 'required|date',
            'hora_entrada' => 'required|date_format:H:i',
            'hora_salida' => 'nullable|date_format:H:i',
        ]);

        $asistencia->update($request->all());
        return redirect()->route('asistencias.index')->with('success', 'Asistencia actualizada correctamente.');
    }

    public function destroy(Asistencia $asistencia)
    {
        $asistencia->delete();
        return redirect()->route('asistencias.index')->with('success', 'Asistencia eliminada correctamente.');
    }
}