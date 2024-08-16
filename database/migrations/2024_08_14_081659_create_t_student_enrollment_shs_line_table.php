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
        Schema::create('t_student_enrollment_shs_line', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('ENROLLMENT_ID')->nullable()->index('enrollment_id');
            $table->integer('SECTION_OFFERING_SUBJECT')->nullable()->index('section_offering_subject');
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
        Schema::dropIfExists('t_student_enrollment_shs_line');
    }
};
