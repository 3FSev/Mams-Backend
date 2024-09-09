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
        Schema::create('t_tor', function (Blueprint $table) {
            $table->id();
            $table->string('STUDENT_NO', 100)->nullable();
            $table->string('NAME', 250)->nullable();
            $table->string('GENDER', 10)->nullable();
            $table->date('DOB')->nullable();
            $table->string('PB', 250)->nullable();
            $table->string('ADDRESS', 250)->nullable();
            $table->string('COURSE', 100)->nullable();
            $table->string('ADMISSION_DATE', 250)->nullable();
            $table->string('ENTRANCE_CREDENTIALS', 100)->nullable();
            $table->date('GRAD_DATE')->nullable();
            $table->string('DEGREE', 100)->nullable();
            $table->string('MAJOR', 100)->nullable();
            $table->string('SO', 100)->nullable();
            $table->text('PRIMARY_COURSE')->nullable();
            $table->integer('P_YEAR')->nullable();
            $table->text('INTERMEDIATE_COURSE')->nullable();
            $table->integer('I_YEAR')->nullable();
            $table->text('HIGH_SCHOOL')->nullable();
            $table->integer('HS_YEAR')->nullable();
            $table->text('REMARKS')->nullable();
            $table->string('PREPARED_BY', 100)->nullable();
            $table->string('CHECKED_BY', 100)->nullable();
            $table->string('REGISTRAR', 100)->nullable();
            $table->timestamp('DATE_ADDED')->nullable()->useCurrent();
            $table->integer('ADDED_BY')->nullable();
            $table->text('FOOTER')->nullable();
            $table->string('NSTP_SN', 50)->nullable();
            $table->text('SHS_SCHOOL')->nullable();
            $table->integer('SHS_YEAR')->nullable();
            $table->string('FOOTER_POS_B4', 10)->nullable();
            $table->text('COL_SCHOOL')->nullable();
            $table->integer('COL_YEAR')->nullable();
            $table->text('MS_SCHOOL')->nullable();
            $table->integer('MS_YEAR')->nullable();
            $table->text('FOOTER_B')->nullable();
            $table->text('DISSERTATION')->nullable();
            $table->text('TD_TITLE')->nullable();
            $table->text('FOOTER_A')->nullable();
            $table->text('THESIS_A')->nullable();
            $table->text('FOOTER_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_tor');
    }
};
