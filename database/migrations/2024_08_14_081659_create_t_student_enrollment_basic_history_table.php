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
        Schema::create('t_student_enrollment_basic_history', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SY')->nullable();
            $table->integer('STUDENT')->nullable();
            $table->integer('SECTION')->nullable();
            $table->integer('SECTION_OFFERING_ELEM_ID')->nullable();
            $table->integer('GRADE_LVL')->nullable();
            $table->string('STATUS', 25)->nullable();
            $table->date('DATE_ENROLLED')->nullable();
            $table->integer('ENROLLED_BY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student_enrollment_basic_history');
    }
};
