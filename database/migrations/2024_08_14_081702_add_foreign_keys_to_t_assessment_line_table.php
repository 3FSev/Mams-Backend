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
        Schema::table('t_assessment_line', function (Blueprint $table) {
            $table->foreign(['ASSESSMENT_ID'], 't_assessment_line_ibfk_1')->references(['id'])->on('t_assessment')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign(['TUITION_FEE'], 't_assessment_line_ibfk_6')->references(['id'])->on('t_tuition_fee')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['STUDENT_ID'], 't_assessment_line_ibfk_8')->references(['id'])->on('t_student')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['FEE'], 't_assessment_line_ibfk_9')->references(['id'])->on('r_fee')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_assessment_line', function (Blueprint $table) {
            $table->dropForeign('t_assessment_line_ibfk_1');
            $table->dropForeign('t_assessment_line_ibfk_6');
            $table->dropForeign('t_assessment_line_ibfk_8');
            $table->dropForeign('t_assessment_line_ibfk_9');
        });
    }
};
