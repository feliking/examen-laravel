<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sucursal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "sucursales";

    public $fillable = [
        "nombre",
        "ciudad_id"
    ];

    public function ciudad () {
        return $this->belongsTo(Ciudad::class);
    }

    public function carreras () {
        return $this->hasMany(Carrera::class);
    }
}
