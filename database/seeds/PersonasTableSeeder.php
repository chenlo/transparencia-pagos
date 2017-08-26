<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'Alcolea',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Adrián',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Marta',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Gema',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Andrés',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'David',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Raúl',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Gregorio',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Fernando',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Eduardo',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Calero',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Luis',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Javier',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Alfredo',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Jaime',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Jesús',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Pancho',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Bernardo',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Hernán',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Ignacio',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Isaac',
        ]);
        DB::table('personas')->insert([
            'nombre' => 'Guillermo',
        ]);
    }
}
