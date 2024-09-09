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
        Schema::create('t_student', function (Blueprint $table) {
            $table->integer('id', true)->unique('id');
            $table->integer('APPLICANT')->nullable()->unique('ixapplicantid');
            $table->string('STUDENT_NO', 250)->nullable();
            $table->integer('CURRICULUM')->nullable()->index('curriculum');
            $table->string('NSTP', 100)->nullable();
            $table->integer('COURSE')->nullable()->index('course');
            $table->integer('SECTION')->nullable()->index('section');
            $table->string('STUDENT_TYPE', 250)->nullable();
            $table->integer('YEAR_LEVEL_APPLIED')->nullable();
            $table->integer('PRESENT_YEAR_LEVEL')->nullable();
            $table->string('SEMESTER_APPLIED', 11)->nullable();
            $table->string('PRESENT_SEMESTER', 11)->nullable();
            $table->string('ADMISSION_STATUS', 15)->nullable();
            $table->integer('ADMISSION_YEAR')->nullable();
            $table->integer('HAS_STUDENT_NO')->nullable()->default(0);
            $table->integer('IS_GRADUATE')->nullable()->default(0);
            $table->string('NSTP2', 100)->nullable();
            $table->string('STUD_PROGRAM_TYPE', 30)->nullable();
            $table->integer('TRACK')->nullable();
            $table->integer('STRAND')->nullable()->default(0);
            $table->string('CLASS_TYPE', 100)->nullable();
            $table->integer('IS_GRADUATE_KINDER')->nullable()->default(0);
            $table->integer('IS_GRADUATE_ELEM')->nullable()->default(0);
            $table->integer('IS_GRADUATE_JHS')->nullable()->default(0);
            $table->integer('IS_GRADUATE_SHS')->nullable()->default(0);
            $table->integer('IS_GRADUATE_GS')->nullable()->default(0);
            $table->date('GRADUATED_COLLEGE')->nullable();
            $table->date('GRADUATED_GS')->nullable();
            $table->date('GRADUATED_SHS')->nullable();
            $table->date('GRADUATED_JHS')->nullable();
            $table->date('GRADUATED_ELEM')->nullable();
            $table->date('GRADUATED_KINDER')->nullable();
            $table->date('GRADUATED_SPED')->nullable();
            $table->timestamp('TIMESTAMP')->useCurrent();
            $table->string('SO_NO', 50)->nullable();
            $table->integer('OLD_YR_LVL')->nullable();
            $table->integer('REMEDIAL_COURSE')->nullable()->index('fk_stud_rc');
            $table->integer('REMEDIAL_CURRICULUM')->nullable()->index('fk_stud_rcurr');
            $table->string('NSTP_SN', 50)->nullable();
            $table->string('LEARNING', 100)->nullable();

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student');
    }
};
