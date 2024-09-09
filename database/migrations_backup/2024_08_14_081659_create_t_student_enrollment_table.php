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
        Schema::create('t_student_enrollment', function (Blueprint $table) {
            $table->id();
            $table->integer('SY_SEM')->nullable()->index('sy_sem');
            $table->integer('STUDENT')->nullable()->index('student');
            $table->integer('YR_LVL')->nullable();
            $table->integer('SECTION')->nullable()->index('section');
            $table->string('PROGRAM_TYPE', 50)->nullable()->default('COLLEGE');

            $table->unique(['SY_SEM', 'STUDENT', 'YR_LVL', 'PROGRAM_TYPE'], 'sy_sem_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student_enrollment');
    }
};
