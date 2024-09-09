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
        Schema::create('t_assessment_shs', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SYSEM')->nullable();
            $table->integer('ENROLLMENT_ID')->nullable();
            $table->integer('STUDENT')->nullable();
            $table->integer('GRADE_LVL')->nullable();
            $table->integer('PAYMENT_SCHED_ID')->nullable();
            $table->date('DATE_ASSESSED')->nullable();
            $table->integer('ASSESSED_BY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_assessment_shs');
    }
};
