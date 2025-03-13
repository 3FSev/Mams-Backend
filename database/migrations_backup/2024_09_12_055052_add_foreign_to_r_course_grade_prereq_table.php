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
        Schema::table('r_course_grade_prereq', function (Blueprint $table) {
            $table->foreign('semester')->references('id')->on('t_sy_sem');
            $table->foreign('course')->references('id')->on('r_course');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_course_grade_prereq', function (Blueprint $table) {
            $table->dropForeign(['semester']);
            $table->dropForeign(['course']);
        });
    }
};
