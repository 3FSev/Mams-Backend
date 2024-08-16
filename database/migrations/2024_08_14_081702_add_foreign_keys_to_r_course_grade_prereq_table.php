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
            $table->foreign(['COURSE'], 'r_course_grade_prereq_ibfk_1')->references(['ID'])->on('r_course')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_course_grade_prereq', function (Blueprint $table) {
            $table->dropForeign('r_course_grade_prereq_ibfk_1');
        });
    }
};
