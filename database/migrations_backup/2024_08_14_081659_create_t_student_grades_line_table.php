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
        Schema::create('t_student_grades_line', function (Blueprint $table) {
            $table->integer('SGID')->index('sgid');
            $table->string('GRADING_SYSTEM_LABEL', 100);
            $table->decimal('GRADING_SYSTEM_PERCENT', 10);
            $table->string('GRADE', 20)->nullable();
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('GRADING_SYSTEM_PERIOD')->nullable();
            $table->dateTime('date_updated')->nullable();
            $table->decimal('updated_by', 10, 0)->nullable();
            $table->boolean('finalized')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student_grades_line');
    }
};
