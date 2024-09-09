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
        Schema::create('t_compre_fee', function (Blueprint $table) {
            $table->id();
            $table->integer('PROGRAM')->index('fk_compre_program');
            $table->integer('SY_SEM')->index('fk_compre_sy');
            $table->decimal('AMOUNT', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_compre_fee');
    }
};
