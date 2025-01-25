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
        Schema::create('pagos_pan2', function (Blueprint $table) {
            $table->id();
            $table->string('cod_suc', 5)->nullable();
            $table->string('tipo_venta', 2)->nullable();
            $table->integer('nro_docu')->nullable();
            $table->integer('nro_pago')->nullable();
            $table->decimal('mont_venta', 12,3)->nullable();
            $table->decimal('mon_pago', 12,3)->nullable();
            $table->decimal('saldo', 12,3)->nullable();
            $table->string('tipo_pago', 1)->nullable();
            $table->date('fec_pago')->nullable();
            $table->string('cod_pago', 2)->nullable();
            $table->string('literal', 50)->nullable();
            $table->integer('nro_cheq')->nullable();
            $table->string('nro_tarj', 16)->nullable();
            $table->string('cod_banco', 30)->nullable();
            $table->integer('nota_cons')->nullable();
            $table->decimal('monto_iva', 12,3)->nullable();
            $table->string('ced_clie', 14)->nullable();
            $table->string('nomb_clie', 80)->nullable();
            $table->string('cod_emp', 5)->nullable();
            $table->string('status', 1)->nullable();
            $table->date('fechreg')->nullable();
            $table->string('tipo_suc', 1)->nullable();
            $table->string('cod_usu', 5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos_pan2');
    }
};
