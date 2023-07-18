<?php

namespace App\Models;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'inscription';
    protected $fillable = ['name', 'matricula', 'enterdo', 'equipo', 'equipo', 'factura', 'formapago', 'curso_fk', 'deuda', 'email', 'telefono', 'turno'];

    public function curso(){
        return $this->belongsTo(Curso::class, 'curso_fk', 'id');
    }

    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
