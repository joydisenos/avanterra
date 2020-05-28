<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancierosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financieros', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('consolidado_u')->nullable();
            $table->float('consolidado_total',20,2)->nullable();
            $table->integer('consolidado_objetivo')->nullable();

            $table->integer('plan_unidades_u')->nullable();
            $table->float('plan_unidades_total',20,2)->nullable();
            $table->integer('plan_unidades_objetivo')->nullable();

            $table->integer('plan_repuestos_u')->nullable();
            $table->float('plan_repuestos_total',20,2)->nullable();
            $table->integer('plan_repuestos_objetivo')->nullable();

            $table->integer('proveedores_u')->nullable();
            $table->float('proveedores_total',20,2)->nullable();
            $table->integer('proveedores_objetivo')->nullable();

            $table->integer('venta_unidades_u')->nullable();
            $table->float('venta_unidades_total',20,2)->nullable();
            $table->integer('venta_unidades_objetivo')->nullable();

            $table->integer('venta_post_u')->nullable();
            $table->float('venta_post_total',20,2)->nullable();
            $table->integer('venta_post_objetivo')->nullable();

            $table->integer('stock_sin_deuda_u')->nullable();
            $table->float('stock_sin_deuda_total',20,2)->nullable();
            $table->integer('stock_sin_deuda_objetivo')->nullable();

            $table->integer('stock_financiado_u')->nullable();
            $table->float('stock_financiado_total',20,2)->nullable();
            $table->integer('stock_financiado_objetivo')->nullable();

            $table->integer('stock_usados_u')->nullable();
            $table->float('stock_usados_total',20,2)->nullable();
            $table->integer('stock_usados_objetivo')->nullable();

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
        Schema::dropIfExists('financieros');
    }
}
