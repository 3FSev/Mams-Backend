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
        Schema::create('t_assessment_line', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('ASSESSMENT_ID')->nullable()->index('assessment_id');
            $table->string('FEE_TYPE', 25)->nullable()->comment('Pre-Enrollment, Registration');
            $table->integer('ROOM_FEE')->nullable()->index('room_fee');
            $table->integer('COURSE_FEE')->nullable()->index('course_fee');
            $table->integer('SUBJECT_FEE')->nullable()->index('subject_fee');
            $table->integer('MANDATORY_FEE')->nullable()->index('mandatory_fee');
            $table->integer('TUITION_FEE')->nullable()->index('tuition_fee');
            $table->integer('TOTAL_HR')->nullable();
            $table->decimal('AMOUNT', 11)->nullable()->default(0)->comment('DEBIT');
            $table->integer('STUDENT_ID')->nullable()->index('student_id');
            $table->integer('USER_ID')->nullable();
            $table->integer('FEE')->nullable()->index('fee');
            $table->string('ADJUSTMENT_STATUS', 50)->nullable()->comment('ADD,CHANGE,DELETE');
            $table->decimal('AMOUNT_CREDIT', 11)->nullable()->default(0)->comment('CREDIT');
            $table->date('T_DATE')->nullable();
            $table->integer('ADJUSTED_FEE')->nullable();
            $table->integer('ORIGINAL_TUITION_HR')->nullable();
            $table->decimal('ORIGINAL_AMT', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_assessment_line');
    }
};
