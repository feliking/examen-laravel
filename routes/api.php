<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\CarreraController;
use App\Http\Controllers\v1\EstudianteController;
use App\Http\Controllers\v1\InscripcionController;
use App\Http\Controllers\v1\SucursalController;
use App\Models\Estudiante;
use App\Models\Sucursal;
use App\Models\Inscripcion;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::apiResource('carreras', CarreraController::class);
Route::apiResource('estudiantes', EstudianteController::class);
Route::get('estudiantes/carnet/{carnet}', function ($carnet) {
    return Estudiante::where('carnet_identidad', $carnet)->first();
});
Route::apiResource('inscripciones', InscripcionController::class);
Route::apiResource('sucursales', SucursalController::class);
Route::get('reportes/pdf', function () {
    $pdf = PDF::loadFile('reportes/estudiantes');
    return $pdf->stream();
});
Route::get('reportes/estudiantes', function () {
    $sucursales = Sucursal::get();
    $inscripciones = Inscripcion::with('carrera')
                                ->with('turno')
                                ->with('paralelo')
                                ->with('plan')
                                ->with('estudiante')
                                ->get();
    $estudiantes = Estudiante::with('inscripciones.carrera.sucursal')->get();
    $pdf = PDF::loadView('reportes.estudiantes', compact('sucursales', 'estudiantes', 'inscripciones'));
    return $pdf->stream();
    // return view('reportes/estudiantes')->with(compact('sucursales', 'estudiantes', 'inscripciones'));
});

