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
        Schema::create('t_fee_course', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SY_SEM')->index('sy_sem');
            $table->string('STUDENT_TYPE', 25)->nullable()->default('All');
            $table->integer('FEE')->index('fee');
            $table->integer('YR_LVL');
            $table->integer('COURSE')->index('course');
            $table->decimal('AMOUNT', 11);
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->string('ADMISSION_STATUS', 25)->nullable();

            $table->unique(['SY_SEM', 'YR_LVL', 'FEE', 'COURSE'], 'sy_sem_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_fee_course');
    }
};
