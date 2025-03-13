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
        Schema::create('r_course_grade_prereq', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('YEAR_LEVEL')->nullable();
            $table->string('SEMESTER', 10)->nullable();
            $table->integer('COURSE')->nullable()->index('course');
            $table->decimal('GRADE', 10)->nullable();
            $table->integer('STATUS')->nullable()->default(1);
            $table->integer('ADDED_BY')->nullable();
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('UPDATED_BY')->nullable();
            $table->dateTime('DATE_UPDATED')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_course_grade_prereq');
    }
};
