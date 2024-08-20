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
        Schema::table('t_student_grades', function (Blueprint $table) {
            $table->foreign(['ENCODED_BY'], 't_student_grades_ibfk_1')->references(['id'])->on('r_user')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['ENROLLMENT_ID'], 't_student_grades_ibfk_2')->references(['id'])->on('t_student_enrollment')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_student_grades', function (Blueprint $table) {
            $table->dropForeign('t_student_grades_ibfk_1');
            $table->dropForeign('t_student_grades_ibfk_2');
        });
    }
};
