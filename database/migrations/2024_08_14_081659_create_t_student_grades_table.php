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
        Schema::create('t_student_grades', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SOSID')->nullable()->index('sosid');
            $table->integer('SUBJECT_ID')->nullable();
            $table->string('FINALGRADE', 20)->nullable();
            $table->string('REMARKS', 50)->nullable();
            $table->integer('STUDENT_ID')->nullable()->index('student_id');
            $table->integer('SYSEM')->nullable()->index('sysem');
            $table->dateTime('LAST_UPDATED')->nullable();
            $table->string('OTHER_REMARKS', 250)->nullable();
            $table->string('FINAL_RATING', 10)->nullable();
            $table->integer('ENCODED_BY')->nullable()->index('encoded_by');
            $table->string('RECENT_GRADE', 100)->nullable();
            $table->dateTime('GRADE_FINALIZED')->nullable();
            $table->string('POSTED', 10)->nullable()->default('No');
            $table->string('FINALIZED', 10)->nullable()->default('No');
            $table->integer('ENROLLMENT_ID')->nullable()->index('enrollment_id');
            $table->integer('YEAR_LEVEL')->nullable();
            $table->integer('SY')->nullable();
            $table->string('SEM', 5)->nullable();
            $table->string('PROGRAM_TYPE', 100)->nullable();
            $table->integer('FACULTY')->nullable();
            $table->integer('tblid')->nullable();
            $table->string('IS_REMEDIAL', 15)->nullable();
            $table->string('IS_PENALTY', 15)->nullable();
            $table->string('UPDATED_BY', 100)->nullable();
            $table->dateTime('DATE_UPDATED')->nullable();
            $table->string('OLD_GRADE', 100)->nullable();
            $table->integer('COURSE')->nullable();
            $table->dateTime('DATE_CREATED')->nullable()->useCurrent();
            $table->integer('old_subject_id')->nullable();
            $table->integer('old_subj_updated_by')->nullable();
            $table->dateTime('old_subj_date_updated')->nullable();
            $table->string('IS_DR_OFFICIAL', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student_grades');
    }
};
