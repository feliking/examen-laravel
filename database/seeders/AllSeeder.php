<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciudad;
use App\Models\Carrera;
use App\Models\Paralelo;
use App\Models\Plan;
use App\Models\Sucursal;
use App\Models\Turno;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeder de ciudades
        $ciudades = [
            [
                "nombre" => "La Paz"
            ],
            [
                "nombre" => "El Alto"
            ],
            [
                "nombre" => "Cochabamba"
            ],
            [
                "nombre" => "Santa Cruz"
            ],
            [
                "nombre" => "Potosí"
            ],
            [
                "nombre" => "Oruro"
            ],
            [
                "nombre" => "Tarija"
            ],
            [
                "nombre" => "Sucre"
            ],
            [
                "nombre" => "Beni"
            ],
            [
                "nombre" => "Pando"
            ],
        ];
        foreach ($ciudades as $ciudad) {
            Ciudad::create($ciudad);
        }

        // Seeder de sucursales
        $sucursales = [
            [
                "nombre" => "Sucursal La Paz",
                "ciudad_id" => 1
            ],
            [
                "nombre" => "Sucursal Cochabamba",
                "ciudad_id" => 2
            ],
            [
                "nombre" => "Sucursal Santa Cruz",
                "ciudad_id" => 3
            ]
        ];
        foreach ($sucursales as $sucursal) {
            Sucursal::create($sucursal);
        }

        // Seeder de carreras
        $carreras = [
            [
                "nombre" => "Ingenieria en Sistemas",
                "sucursal_id" => 1
            ],
            [
                "nombre" => "Medicina",
                "sucursal_id" => 1
            ],
            [
                "nombre" => "Artes Plasticas",
                "sucursal_id" => 1
            ],
            [
                "nombre" => "Ingenieria en Sistemas",
                "sucursal_id" => 2
            ],
            [
                "nombre" => "Diseño Grafico",
                "sucursal_id" => 2
            ],
            [
                "nombre" => "Ingenieria comercial",
                "sucursal_id" => 3
            ],
            [
                "nombre" => "Ingenieria quimica",
                "sucursal_id" => 3
            ],
            [
                "nombre" => "Ingenieria petrolera",
                "sucursal_id" => 3
            ],
        ];
        foreach ($carreras as $carrera) {
            Carrera::create($carrera);
        }

        // Seeder de Turnos
        $turnos = [
            [
                "nombre" => "Mañana",
                "carrera_id" => 1
            ],
            [
                "nombre" => "Noche",
                "carrera_id" => 1
            ],
            [
                "nombre" => "Mañana",
                "carrera_id" => 2
            ],
            [
                "nombre" => "Tarde",
                "carrera_id" => 2
            ],
            [
                "nombre" => "Noche",
                "carrera_id" => 2
            ],
            [
                "nombre" => "Mañana",
                "carrera_id" => 3
            ],
            [
                "nombre" => "Mañana",
                "carrera_id" => 4
            ],
            [
                "nombre" => "Mañana",
                "carrera_id" => 5
            ],
            [
                "nombre" => "Mañana",
                "carrera_id" => 6
            ],
            [
                "nombre" => "Mañana",
                "carrera_id" => 7
            ],
            [
                "nombre" => "Mañana",
                "carrera_id" => 8
            ],
        ];
        foreach ($turnos as $turno) {
            Turno::create($turno);
        }

        // Seeder de paralelos
        $paralelos = [
            [
                "nombre" => "Paralelo A",
                "carrera_id" => 1
            ],
            [
                "nombre" => "Paralelo B",
                "carrera_id" => 1
            ],
            [
                "nombre" => "Paralelo A",
                "carrera_id" => 2
            ],
            [
                "nombre" => "Paralelo B",
                "carrera_id" => 2
            ],
            [
                "nombre" => "Paralelo C",
                "carrera_id" => 2
            ],
            [
                "nombre" => "Paralelo A",
                "carrera_id" => 3
            ],
            [
                "nombre" => "Paralelo A",
                "carrera_id" => 4
            ],
            [
                "nombre" => "Paralelo A",
                "carrera_id" => 5
            ],
            [
                "nombre" => "Paralelo A",
                "carrera_id" => 6
            ],
            [
                "nombre" => "Paralelo A",
                "carrera_id" => 7
            ],
            [
                "nombre" => "Paralelo A",
                "carrera_id" => 8
            ],
        ];
        foreach ($paralelos as $paralelo) {
            Paralelo::create($paralelo);
        }

        // Seeder de planes de pago
        $planes = [
            [
                "nombre" => "Al contado",
                "carrera_id" => 1
            ],
            [
                "nombre" => "A pagos",
                "carrera_id" => 1
            ],
            [
                "nombre" => "Al contado",
                "carrera_id" => 2
            ],
            [
                "nombre" => "A pagos",
                "carrera_id" => 2
            ],
            [
                "nombre" => "Al contado",
                "carrera_id" => 3
            ],
            [
                "nombre" => "Al contado",
                "carrera_id" => 4
            ],
            [
                "nombre" => "Al contado",
                "carrera_id" => 5
            ],
            [
                "nombre" => "Al contado",
                "carrera_id" => 6
            ],
            [
                "nombre" => "Al contado",
                "carrera_id" => 7
            ],
            [
                "nombre" => "Al contado",
                "carrera_id" => 8
            ],
        ];
        foreach ($planes as $plan) {
            Plan::create($plan);
        }
    }
}
