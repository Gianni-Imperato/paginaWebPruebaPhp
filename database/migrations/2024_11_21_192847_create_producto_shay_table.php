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
        Schema::create('producto_shay', function (Blueprint $table) {
            $table->id();
            $table->string('cod_arti', 7)->nullable();
            $table->integer('tipo_pro')->nullable();
            $table->string('des_arti', 1000)->nullable();
            $table->decimal('pvp_arti', 12, 2)->nullable();
            $table->decimal('pvp_arti1', 12, 2)->nullable();
            $table->decimal('pvp_arti2', 12, 2)->nullable();
            $table->decimal('pvp_arti3', 12, 2)->nullable();
            $table->decimal('can_exis', 8, 2)->nullable();
            $table->decimal('can_rese', 8, 2)->nullable();
            $table->decimal('costo', 12, 2)->nullable() ;
            $table->string('status', 1)->nullable();
            $table->decimal('impuesto', 10, 2)->nullable();
            $table->string('cod_suc', 3)->nullable();
            $table->string('linea', 10)->nullable();
            $table->string('sub_linea', 10)->nullable();
            $table->string('clase', 10000)->nullable();
            $table->string('presenta', 10)->nullable();
            $table->string('grupo_pre', 25)->nullable();
            $table->integer('can_pres')->nullable();
            $table->string('fabri_casa', 10)->nullable();
            $table->string('tipo_visi', 10)->nullable();
            $table->string('color', 10)->nullable();
            $table->date('fec_ing')->nullable();
            $table->date('fec_vig')->nullable();
            $table->date('fec_mod')->nullable();
            $table->decimal('cost_prom', 12, 2)->nullable();
            $table->string('cod_prov', 5)->nullable();
            $table->string('modelo', 10)->nullable();
            $table->decimal('pvp_ant', 12, 2)->nullable();
            $table->decimal('pvp_nue', 12, 2)->nullable();
            $table->string('vtas_grav', 1)->nullable();
            $table->string('comp_grav', 1)->nullable();
            $table->string('cod_alter', 30)->nullable();
            $table->time('hora_ing')->nullable()->nullable();
            $table->time('hora_vig')->nullable()->nullable();
            $table->string('promocion', 1)->nullable();
            $table->string('inventario', 1)->nullable();
            $table->decimal('can_vtas', 8, 2)->nullable();
            $table->decimal('descuento', 8, 2)->nullable();
            $table->string('sta_inv', 1)->nullable();
            $table->decimal('factor', 8, 2)->nullable();
            $table->string('tipo_divi', 3)->nullable();
            $table->decimal('costo_divi', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_shay');
    }
};
