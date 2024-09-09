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
        Schema::create('t_assessment_shs_line', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('ASSESSMENT_ID')->nullable()->index('assessment_id');
            $table->integer('FEE')->nullable();
            $table->decimal('AMOUNT', 11)->nullable();
            $table->integer('T_FEE_ID')->nullable();
            $table->string('FEE_TYPE', 50)->nullable();
            $table->integer('USER_ID')->nullable();
            $table->string('STATUS', 25)->nullable();
            $table->string('ADJUSTMENT_STATUS', 25)->nullable();
            $table->decimal('CREDIT_AMOUNT', 11)->nullable()->default(0);
            $table->date('T_DATE_ADJUSTED')->nullable();
            $table->integer('ADJUSTED_FEE')->nullable();
            $table->date('T_DATE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_assessment_shs_line');
    }
};
