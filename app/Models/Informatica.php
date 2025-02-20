<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informatica extends Model
{
    use HasFactory;

    protected $table = 'informatica';

    protected $fillable = [
        'estudiante',
        'nota',
        'fecha',
    ];

    // Relación con la tabla estudiantes
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'estudiante');
    }
}