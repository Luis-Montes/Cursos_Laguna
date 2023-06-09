<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'inscription';
    protected $fillable = ['name', 'matricula', 'enterdo', 'equipo', 'equipo', 'factura', 'formapago', 'curso_fk', 'deuda', 'email', 'telefono', 'turno'];

    public function curso(){
        return $this->belongsTo(Curso::class, 'curso_fk', 'id');
    }
}
