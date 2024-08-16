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
        Schema::table('t_student_enrollment', function (Blueprint $table) {
            $table->foreign(['SY_SEM'], 't_student_enrollment_ibfk_1')->references(['ID'])->on('t_sy_sem')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['STUDENT'], 't_student_enrollment_ibfk_2')->references(['ID'])->on('t_student')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_student_enrollment', function (Blueprint $table) {
            $table->dropForeign('t_student_enrollment_ibfk_1');
            $table->dropForeign('t_student_enrollment_ibfk_2');
        });
    }
};
