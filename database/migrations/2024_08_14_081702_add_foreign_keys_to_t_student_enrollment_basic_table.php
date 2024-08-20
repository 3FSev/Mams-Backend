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
        Schema::table('t_student_enrollment_basic', function (Blueprint $table) {
            $table->foreign(['SY'], 't_student_enrollment_basic_ibfk_1')->references(['CODE'])->on('r_sy')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['STUDENT'], 't_student_enrollment_basic_ibfk_2')->references(['id'])->on('t_student')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SECTION'], 't_student_enrollment_basic_ibfk_3')->references(['id'])->on('r_section_basic')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SECTION_OFFERING_ELEM_ID'], 't_student_enrollment_basic_ibfk_4')->references(['id'])->on('t_section_offering_elem')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_student_enrollment_basic', function (Blueprint $table) {
            $table->dropForeign('t_student_enrollment_basic_ibfk_1');
            $table->dropForeign('t_student_enrollment_basic_ibfk_2');
            $table->dropForeign('t_student_enrollment_basic_ibfk_3');
            $table->dropForeign('t_student_enrollment_basic_ibfk_4');
        });
    }
};
