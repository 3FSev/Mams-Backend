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
        Schema::table('t_assessment_elem', function (Blueprint $table) {
            $table->foreign(['ENROLLMENT_ID'], 't_assessment_elem_ibfk_1')->references(['ID'])->on('t_student_enrollment_basic')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_assessment_elem', function (Blueprint $table) {
            $table->dropForeign('t_assessment_elem_ibfk_1');
        });
    }
};
