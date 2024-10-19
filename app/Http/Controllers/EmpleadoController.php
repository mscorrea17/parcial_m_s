<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Departamento;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    
    public function index()
    {
        $empleados = Empleado::with('departamento')->get();
        return view('empleados.index', compact('empleados'));
    }

    
    public function create()
    {
        $departamentos = Departamento::all(); 
        return view('empleados.create', compact('departamentos'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'posición' => 'required',
            'departamento_id' => 'required',
            'fecha_contratación' => 'required|date',
            'salario' => 'required|numeric',
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado creado correctamente.');
    }

    
    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    
    public function edit(Empleado $empleado)
    {
        $departamentos = Departamento::all();
        return view('empleados.edit', compact('empleado', 'departamentos'));
    }

    
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'posición' => 'required',
            'departamento_id' => 'required',
            'fecha_contratación' => 'required|date',
            'salario' => 'required|numeric',
        ]);

        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado correctamente.');
    }

    
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado correctamente.');
    }
}