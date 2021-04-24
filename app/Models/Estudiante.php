<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'nombre',
        'carnet_identidad',
        'correo_electronico'
    ];

    public function inscripciones () {
        return $this->hasMany(Inscripcion::class);
    }
}
