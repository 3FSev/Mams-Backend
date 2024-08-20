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
        Schema::create('t_fee_mandatory', function (Blueprint $table) {
            $table->id();
            $table->integer('SY_SEM')->index('sy_sem');
            $table->integer('FEE')->index('fee');
            $table->decimal('AMOUNT', 11);
            $table->string('STATUS', 25)->nullable()->default('Finalize');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_fee_mandatory');
    }
};
