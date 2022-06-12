<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\empleado::truncate();
        DB::table('registro_de_empleados')->truncate();
        \App\Models\empleado::factory(1000)->create();
        /**
        $data = [
            'nombre_empleado' => 'Juan',
            'numero_telefono' => '23456798',
            'correo' => 'juan12@gmail.com',
            'direccion' => '20 ave. 12 y 13 calle',
            'departamento' => 'Morales',
            'usuario' => 1
        ];
        DB::table('registro_de_empleados')->insert($data);
        */
    }
}
