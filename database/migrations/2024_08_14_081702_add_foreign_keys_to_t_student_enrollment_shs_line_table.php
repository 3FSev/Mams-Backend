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
        Schema::table('t_student_enrollment_shs_line', function (Blueprint $table) {
            $table->foreign(['ENROLLMENT_ID'], 't_student_enrollment_shs_line_ibfk_1')->references(['id'])->on('t_student_enrollment_shs')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SECTION_OFFERING_SUBJECT'], 't_student_enrollment_shs_line_ibfk_2')->references(['id'])->on('t_section_offering_shs_subject')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_student_enrollment_shs_line', function (Blueprint $table) {
            $table->dropForeign('t_student_enrollment_shs_line_ibfk_1');
            $table->dropForeign('t_student_enrollment_shs_line_ibfk_2');
        });
    }
};
