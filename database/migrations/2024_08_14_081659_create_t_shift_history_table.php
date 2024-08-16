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
        Schema::create('t_shift_history', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('STUD_ID')->nullable();
            $table->integer('APPLICANT')->nullable();
            $table->string('STUDENT_NO', 100)->nullable();
            $table->string('CURRICULUM', 100)->nullable();
            $table->string('NSTP', 100)->nullable();
            $table->string('NSTP2', 100)->nullable();
            $table->string('COURSE', 100)->nullable();
            $table->string('COURSE_TO', 100)->nullable();
            $table->string('SECTION', 100)->nullable();
            $table->string('STUDENT_TYPE', 100)->nullable();
            $table->string('YEAR_LEVEL_APPLIED', 100)->nullable();
            $table->string('PRESENT_YEAR_LEVEL', 100)->nullable();
            $table->string('SEMESTER_APPLIED', 100)->nullable();
            $table->string('PRESENT_SEMESTER', 100)->nullable();
            $table->string('ADMISSION_STATUS', 100)->nullable();
            $table->string('ADMISSION_YEAR', 100)->nullable();
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->string('STATUS', 10)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_shift_history');
    }
};
