<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inscripcion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "inscripciones";

    public $fillable = [
        'carrera_id',
        'estudiante_id',
        'turno_id',
        'plan_id',
        'paralelo_id'
    ];

    public function estudiante () {
        return $this->belongsTo(Estudiante::class);
    }

    public function carrera () {
        return $this->belongsTo(Carrera::class);
    }

    public function turno () {
        return $this->belongsTo(Turno::class);
    }

    public function paralelo () {
        return $this->belongsTo(Paralelo::class);
    }

    public function plan () {
        return $this->belongsTo(Plan::class);
    }
}
