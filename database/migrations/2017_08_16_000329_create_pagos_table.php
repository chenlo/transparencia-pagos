<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('pagado')->default(0);
            $table->string('metodo')->default('A saber');
            $table->date('fecha_pago');
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->integer('evento_id')->unsigned();
            $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('eventos');
    }
}
