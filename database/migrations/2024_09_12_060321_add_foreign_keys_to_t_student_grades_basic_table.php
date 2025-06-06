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
        Schema::table('t_student_grades_basic', function (Blueprint $table) {
            $table->foreign(['STUDENTID'], 't_student_grades_basic_ibfk_1')->references(['ID'])->on('t_student')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_student_grades_basic', function (Blueprint $table) {
            $table->dropForeign('t_student_grades_basic_ibfk_1');
        });
    }
};
