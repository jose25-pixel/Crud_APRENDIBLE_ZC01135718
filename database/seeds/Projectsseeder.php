<?php

use Illuminate\Database\Seeder;

class Projectsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('projects')->insert([
        'title'=>'Cárrito de compras',
        'ulr'=>'Tienda en linea',
          'description'=>'Realizado en el lenguaje php'
    ]);
    DB::table('projects')->insert([
        'title'=>'Crud con el framework laravel',
        'ulr'=>'Productos',
          'description'=>'Realizado en el lenguaje php con laravel'
    ]);
    DB::table('projects')->insert([
        'title'=>'Registro de empleados',
        'ulr'=>'Empleados',
          'description'=>'realizado en java'
    ]);
     DB::table('projects')->insert([
        'title'=>'Inventario',
        'ulr'=>'Inventario de autos',
          'description'=>'lenguaje de programacion js'
    ]);       DB::table('projects')->insert([
        'title'=>'Registro de notas',
        'ulr'=>'Escuela',
          'description'=>'Sistema para ingresar notas '
    ]);
           DB::table('projects')->insert([
        'title'=>'Concecionario',
        'ulr'=>'Venta Vehiculos',
          'description'=>'Realizado en el lenguaje php Y JS'
    ]);
    }
}
