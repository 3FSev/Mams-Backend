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
        Schema::create('t_stud_curriculum', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('STUDENT_ID')->nullable()->index('student_id');
            $table->string('STUD_PROGRAM_TYPE', 25)->nullable();
            $table->integer('CURRICULUM')->nullable();
            $table->integer('GRADE_LVL_START')->nullable();
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->date('DATE_GRADUATED')->nullable();
            $table->integer('REMEDIAL_COURSE')->nullable();
            $table->integer('REMEDIAL_CURRICULUM')->nullable();
            $table->dateTime('DATE_APPLIED_GRADUATION')->nullable();
            $table->string('TAGGRADAPP', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stud_curriculum');
    }
};
