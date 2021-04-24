<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
</head>
<body>
    <table width="100%">
        <tr>
            <td style="text-align: center">
                <h2>Reporte de alumnos inscritos por sucursal</h2>
            </td>
        </tr>
        @foreach ($sucursales as $sucursal)
            <tr>
                <td>
                    <h2>{{$sucursal->nombre}}</h2>
                    <table border="1" width="100%">
                        <thead>
                        <tr>
                            <th>Estudiante</th>
                            <th>Carrera</th>
                            <th>Turno</th>
                            <th>Paralelo</th>
                            <th>Plan</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($inscripciones as $inscripcion)
                                @if($inscripcion->carrera->sucursal->id == $sucursal->id)
                                    <tr>
                                        <td>{{$inscripcion->estudiante->nombre}}</td>
                                        <td>{{$inscripcion->carrera->nombre}}</td>
                                        <td>{{$inscripcion->turno->nombre}}</td>
                                        <td>{{$inscripcion->paralelo->nombre}}</td>
                                        <td>{{$inscripcion->plan->nombre}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </td>
            </tr>
        @endforeach
    </table>
    <hr>
    <table width="100%">
        <tr>
            <td style="text-align: center">
                <h2>Reporte de alumnos inscritos global</h2>
            </td>
        </tr>
        <tr>
            <td>
                @foreach ($estudiantes as $estudiante)
                    <h3>Nombre: {{$estudiante->nombre}}</h3>
                    <table border="1" width="100%">
                        <thead>
                        <tr>
                            <th>Sucursal</th>
                            <th>Carrera</th>
                            <th>Turno</th>
                            <th>Paralelo</th>
                            <th>Plan</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($estudiante->inscripciones as $inscripcion)
                                <tr>
                                    <td>{{$inscripcion->carrera->sucursal->nombre}}</td>
                                    <td>{{$inscripcion->carrera->nombre}}</td>
                                    <td>{{$inscripcion->turno->nombre}}</td>
                                    <td>{{$inscripcion->paralelo->nombre}}</td>
                                    <td>{{$inscripcion->plan->nombre}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endforeach
            </td>
        </tr>
    </table>
</body>
</html>