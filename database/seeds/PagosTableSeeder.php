<?php

use Illuminate\Database\Seeder;

class PagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// Apuestas deportivas
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 5,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 6,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 7,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 9,
        ]);
        DB::table('pagos')->insert([             
            'evento_id' => 1,
            'persona_id' => 10,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 11,
        ]);        
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 12,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 13,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 14,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 15,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 16,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 17,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 18,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 19,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 20,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 21,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 1,
            'persona_id' => 22,
        ]);
        /// F1 Donky
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 1,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 2,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 3,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 4,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 5,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 6,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 7,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 11,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 13,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 18,
        ]);
        DB::table('pagos')->insert([
            'evento_id' => 2,
            'persona_id' => 19,
        ]);
    }
}
