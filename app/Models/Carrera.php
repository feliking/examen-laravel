<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrera extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function sucursal () {
        return $this->belongsTo(Sucursal::class);
    }

    public function turnos () {
        return $this->hasMany(Turno::class);
    }

    public function planes () {
        return $this->hasMany(Plan::class);
    }

    public function paralelos () {
        return $this->hasMany(Paralelo::class);
    }
}
