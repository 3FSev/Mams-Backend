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
        Schema::create('t_student_enrollment_shs_line_history', function (Blueprint $table) {
            $table->id();
            $table->integer('ENROLLMENT_ID')->nullable();
            $table->integer('SECTION_OFFERING_SUBJECT')->nullable();
            $table->timestamp('DATE_ENROLLED')->nullable()->useCurrent();
            $table->integer('ENROLLED_BY')->nullable();
            $table->string('ADJUSTMENT_STATUS', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student_enrollment_shs_line_history');
    }
};
