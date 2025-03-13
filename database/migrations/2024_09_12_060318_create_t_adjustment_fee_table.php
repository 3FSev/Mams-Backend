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
        Schema::create('t_adjustment_fee', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('FEE')->nullable()->index('fee');
            $table->decimal('AMOUNT', 11)->nullable();
            $table->string('FEE_CAT', 50)->nullable();
            $table->string('ADJUSTMENT_TYPE', 50)->nullable();
            $table->integer('COURSE')->nullable()->index('course');
            $table->string('STUDENT_TYPE', 25)->nullable();
            $table->integer('YR_LVL')->nullable();
            $table->string('ADMISSION_STATUS', 25)->nullable();
            $table->integer('SUBJECT')->nullable()->index('subject');
            $table->integer('ROOM')->nullable()->index('room');
            $table->integer('STUDENT')->nullable()->index('student');
            $table->integer('SY_SEM')->nullable()->index('sy_sem');
            $table->string('STATUS', 25)->nullable()->default('Posted');
            $table->dateTime('DATE')->nullable();
            $table->integer('USER')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_adjustment_fee');
    }
};
