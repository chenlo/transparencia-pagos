<?php

use Illuminate\Database\Seeder;

class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventos')->insert([
            'nombre' => 'Apuestas Fútbol',
            'cuota' => 38,
        ]);
        DB::table('eventos')->insert([
            'nombre' => 'F1 Donky',
            'cuota' => 10,
        ]);
    }
}
