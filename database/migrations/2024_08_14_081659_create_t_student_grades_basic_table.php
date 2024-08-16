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
        Schema::create('t_student_grades_basic', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SYSEM')->nullable();
            $table->integer('STUDENTID')->nullable()->index('studentid');
            $table->integer('SOSID')->nullable();
            $table->integer('SUBJECT_ID')->nullable()->index('subject_id');
            $table->string('FINALGRADE', 20)->nullable();
            $table->string('FINALREMARKS', 20)->nullable();
            $table->dateTime('LAST_UPDATED')->nullable();
            $table->integer('ENCODED_BY')->nullable();
            $table->string('RECENT_GRADE', 10)->nullable();
            $table->dateTime('GRADE_POSTED')->nullable();
            $table->dateTime('GRADE_FINALIZED')->nullable();
            $table->string('POSTED', 10)->nullable()->default('No');
            $table->string('FINALIZED', 10)->nullable()->default('No');
            $table->integer('SY')->nullable();
            $table->integer('GRADE_LVL')->nullable();
            $table->string('OTHER_REMARKS', 25)->nullable();
            $table->string('FINAL_RATING', 25)->nullable();
            $table->string('PERIOD1', 10)->nullable();
            $table->string('PERIOD2', 10)->nullable();
            $table->string('PERIOD3', 10)->nullable();
            $table->string('PERIOD4', 10)->nullable();
            $table->string('PERIOD5', 10)->nullable();
            $table->string('PERIOD1_STATUS', 10)->nullable();
            $table->string('PERIOD2_STATUS', 10)->nullable();
            $table->string('PERIOD3_STATUS', 10)->nullable();
            $table->string('PERIOD4_STATUS', 10)->nullable();
            $table->string('PROGRAM_TYPE', 100)->nullable();
            $table->integer('FACULTY')->nullable();
            $table->integer('tblid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student_grades_basic');
    }
};
