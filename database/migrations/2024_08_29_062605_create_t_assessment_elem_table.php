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
        Schema::create('t_assessment_elem', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SY')->nullable();
            $table->integer('ENROLLMENT_ID')->nullable()->index('enrollment_id');
            $table->integer('STUDENT')->nullable();
            $table->integer('GRADE_LVL')->nullable();
            $table->integer('PAYMENT_SCHED_ID')->nullable()->index('payment_sched_id');
            $table->date('DATE_ASSESSED')->nullable();
            $table->integer('ASSESSED_BY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_assessment_elem');
    }
};
