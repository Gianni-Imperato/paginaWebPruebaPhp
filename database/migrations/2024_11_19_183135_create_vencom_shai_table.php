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
        Schema::create('vencom_shai', function (Blueprint $table) {
            $table->id();
            $table->string('cod_suc', 5)->nullable();
            $table->integer('nro_doc')->nullable();
            $table->integer('nro_fac')->nullable();
            $table->string('motivo', 2)->nullable();
            $table->string('cond_vent', 1)->nullable();
            $table->integer('transac')->nullable();
            $table->date('fec_fac')->nullable();
            $table->integer('tipo_pro')->nullable();
            $table->string('cod_arti', 7)->nullable();
            $table->string('des_arti', 1000)->nullable();
            $table->decimal('cos_arti', 12,3)->nullable();
            $table->decimal('can_arti', 8,3)->nullable();
            $table->decimal('pvp_arti', 12,3)->nullable();
            $table->decimal('pvp_bruto', 12,3)->nullable();
            $table->decimal('p_desc', 8,3)->nullable();
            $table->decimal('b_desc', 12,3)->nullable();
            $table->integer('tipo_desc')->nullable();
            $table->decimal('p_impuesto', 8,3)->nullable();
            $table->decimal('b_impuesto', 12,3)->nullable();
            $table->decimal('pvp_neto', 12,3)->nullable();
            $table->decimal('p_desc_adi', 12, 2)->nullable();
            $table->decimal('b_desc_adi', 12,3)->nullable();
            $table->decimal('total_neto')->nullable();
            $table->string('cod_emp', 5)->nullable();
            $table->string('cod_emp2', 5)->nullable();
            $table->string('cod_opt', 5)->nullable();
            $table->string('cod_cli', 14)->nullable();
            $table->string('cedula', 15)->nullable();
            $table->string('nom_clie', 80)->nullable();
            $table->string('tipo_suc', 1)->nullable();
            $table->string('casa', 10)->nullable();
            $table->string('modelo', 10)->nullable();
            $table->string('color', 10)->nullable();
            $table->string('linea', 10)->nullable();
            $table->string('sub_linea', 10)->nullable();
            $table->string('clase', 10)->nullable();
            $table->string('tipo_visi', 10)->nullable();
            $table->string('usuario', 30)->nullable();
            $table->decimal('pvp_ante', 12,3)->nullable();
            $table->integer('control')->nullable();
            $table->string('cod_prov', 5)->nullable();
            $table->decimal('p_rete', 8,3)->nullable();
            $table->string('n_rete', 15)->nullable();
            $table->date('fecha_reten')->nullable();
            $table->string('tipo_divi', 3)->nullable();
            $table->decimal('tasa_camb', 12, 3)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vencom_shai');
    }
};
