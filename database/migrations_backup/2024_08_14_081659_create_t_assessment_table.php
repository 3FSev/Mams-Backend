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
        Schema::create('t_assessment', function (Blueprint $table) {
            $table->id();
            $table->integer('ENROLLMENT_ID')->nullable()->index('enrollment_id');
            $table->integer('SY_SEM')->nullable()->index('sy_sem');
            $table->string('STUDENT_STATUS', 25)->nullable();
            $table->integer('STUDENT_ID')->nullable()->index('student_id');
            $table->integer('YR_LVL')->nullable();
            $table->integer('PAYMENT_MODE')->nullable();
            $table->integer('STATUS')->nullable();
            $table->dateTime('DATE_ASSESSED')->nullable();
            $table->string('PROGRAM_TYPE_OF_STUD', 50)->nullable();
            $table->integer('COURSE_')->nullable();

            $table->unique(['ENROLLMENT_ID', 'SY_SEM', 'STUDENT_ID'], 'enrollment_id_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_assessment');
    }
};
