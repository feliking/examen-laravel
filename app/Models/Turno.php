<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turno extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function carrera () {
        return $this->belongsTo(Carrera::class);
    }
}
