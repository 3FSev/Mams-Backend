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
        Schema::create('t_tuition_fee', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->decimal('AMOUNT', 11);
            $table->integer('COURSE')->index('course');
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->integer('YR_LVL')->nullable();
            $table->integer('SY_SEM')->nullable();
            $table->string('ADMISSION_STATUS', 50)->nullable();

            $table->unique(['SY_SEM', 'YR_LVL', 'COURSE'], 'sy_sem');
            $table->unique(['SY_SEM', 'YR_LVL', 'COURSE'], 'sy_sem_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_tuition_fee');
    }
};
