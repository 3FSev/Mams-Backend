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
        Schema::create('t_student_grades_line_basic', function (Blueprint $table) {
            $table->id();
            $table->integer('SGID')->nullable();
            $table->string('GRADING_SYSTEM_LABEL', 50)->nullable();
            $table->decimal('GRADING_SYSTEM_PERCENT', 10)->nullable();
            $table->string('GRADE', 20)->nullable();
            $table->timestamp('DATE_ADDED')->nullable()->useCurrent();
            $table->integer('PERIOD')->nullable();
            $table->string('IS_MULTIPLE', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student_grades_line_basic');
    }
};
