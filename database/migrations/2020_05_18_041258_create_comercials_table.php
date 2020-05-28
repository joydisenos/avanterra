<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('contactos_u')->nullable();
            $table->float('contactos_total',20,2)->nullable();
            $table->integer('contactos_objetivo')->nullable();

            $table->integer('prospectos_u')->nullable();
            $table->float('prospectos_total',20,2)->nullable();
            $table->integer('prospectos_objetivo')->nullable();

            $table->integer('boletos_u')->nullable();
            $table->float('boletos_total',20,2)->nullable();
            $table->integer('boletos_objetivo')->nullable();

            $table->integer('declaraciones_u')->nullable();
            $table->float('declaraciones_total',20,2)->nullable();
            $table->integer('declaraciones_objetivo')->nullable();

            $table->integer('etios_u')->nullable();
            $table->float('etios_total',20,2)->nullable();
            $table->integer('etios_objetivo')->nullable();

            $table->integer('yaris_u')->nullable();
            $table->float('yaris_total',20,2)->nullable();
            $table->integer('yaris_objetivo')->nullable();

            $table->integer('corolla_u')->nullable();
            $table->float('corolla_total',20,2)->nullable();
            $table->integer('corolla_objetivo')->nullable();

            $table->integer('hillux_u')->nullable();
            $table->float('hillux_total',20,2)->nullable();
            $table->integer('hillux_objetivo')->nullable();

            $table->integer('alta_gama_u')->nullable();
            $table->float('alta_gama_total',20,2)->nullable();
            $table->integer('alta_gama_objetivo')->nullable();

            $table->integer('boletos_usados_u')->nullable();
            $table->float('boletos_usados_total',20,2)->nullable();
            $table->integer('boletos_usados_objetivo')->nullable();

            $table->integer('entregas_u')->nullable();
            $table->float('entregas_total',20,2)->nullable();
            $table->integer('entregas_objetivo')->nullable();

            $table->integer('suscripciones_u')->nullable();
            $table->float('suscripciones_total',20,2)->nullable();
            $table->integer('suscripciones_objetivo')->nullable();

            $table->integer('ventas_u')->nullable();
            $table->float('ventas_total',20,2)->nullable();
            $table->integer('ventas_objetivo')->nullable();

            $table->integer('cpu_u')->nullable();
            $table->float('cpu_total',20,2)->nullable();
            $table->integer('cpu_objetivo')->nullable();

            $table->integer('tu_u')->nullable();
            $table->float('tu_total',20,2)->nullable();
            $table->integer('tu_objetivo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comercials');
    }
}
