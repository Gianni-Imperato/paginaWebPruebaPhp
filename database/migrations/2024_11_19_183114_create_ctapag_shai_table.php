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
        Schema::create('ctapag_shai', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('cod_emp', 5)->nullable();
            $table->string('cod_pro', 5)->nullable();
            $table->string('cod_pag', 5)->nullable();
            $table->string('cond', 1)->nullable();
            $table->string('factura', 15)->nullable();
            $table->string('control', 15)->nullable();
            $table->integer('dias')->nullable();
            $table->decimal('exento', 12,2)->nullable();
            $table->decimal('monto', 12,2)->nullable();
            $table->decimal('impuesto', 12,2)->nullable();
            $table->decimal('iva', 8,2)->nullable();
            $table->decimal('neto', 12,2)->nullable();
            $table->string('obs', 1000)->nullable();
            $table->date('fec_fact')->nullable();
            $table->string('status', 1)->nullable();
            $table->date('fecha_reten')->nullable();
            $table->integer('nro_retencion')->nullable();
            $table->decimal('iva_retenido', 8,2)->nullable();
            $table->date('fecha_islr')->nullable();
            $table->decimal('monto_islr', 8,2)->nullable();
            $table->string('ult_islr', 14)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctapag_shai');
    }
};
