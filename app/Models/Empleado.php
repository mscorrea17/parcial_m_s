<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'posición', 'departamento_id', 'fecha_contratación', 'salario'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }
}