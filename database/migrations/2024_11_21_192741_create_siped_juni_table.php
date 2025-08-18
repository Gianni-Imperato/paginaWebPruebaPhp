<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siped_juni', function (Blueprint $table) {
            $table->id();
            $table->string('cod_suc', 5)->nullable();
            $table->string('nro_pedi', 7)->nullable();
            $table->string('cod_arti', 7)->nullable();
            $table->string('des_arti', 250)->nullable();
            $table->decimal('can_arti', 8,3)->nullable();
            $table->decimal('pvp_arti', 12,3)->nullable();
            $table->decimal('cost_uni', 12,3)->nullable();
            $table->decimal('cost_tot', 12,3)->nullable();
            $table->decimal('p_impuesto', 12,3)->nullable();
            $table->decimal('b_impuesto', 12,3)->nullable();
            $table->decimal('can_ante', 8,3)->nullable();
            $table->string('cod_prov', 5)->nullable();
            $table->string('nro_fact', 20)->nullable();
            $table->integer('nro_orden')->nullable();
            $table->date('fecha')->nullable();
            $table->date('fechreg')->nullable();
            $table->string('tipo_suc', 1)->nullable();
            $table->string('tipo_divi', 3)->nullable();
            $table->decimal('tasa_camb', 12,3)->nullable();
            $table->decimal('cost_mon', 12,3)->nullable();
            $table->decimal('cost_pro', 12,3)->nullable();
            $table->string('control', 20)->nullable();
            $table->string('nom_prov', 80)->nullable();
            $table->decimal('p_desc', 8,3)->nullable();
            $table->decimal('b_desc', 12,3)->nullable();
            $table->integer('cd_pago')->nullable();
            $table->string('status', 1)->nullable();
            $table->string('usuario', 100)->nullable();
            $table->string('sta_pedi', 1)->nullable();
            $table->integer('cons_reg')->nullable();
            $table->string('sta_entrada', 1)->nullable();
            $table->string('nota_entrega', 15)->nullable();
            $table->integer('nro_retencion')->nullable();
            $table->decimal('iva_retenido', 12,3)->nullable();
            $table->date('fecha_fact', 12,3)->nullable();
            $table->date('fecha_reten', 12,3)->nullable();
            $table->string('cod_transporte', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siped_juni');
    }
};
