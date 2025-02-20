<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'correo',
        'usuario',
        'contrasena',
        'rol',
        'fecha',
    ];

    // Relación con la tabla informatica
    public function informatica()
    {
        return $this->hasMany(Informatica::class, 'estudiante');
    }
}