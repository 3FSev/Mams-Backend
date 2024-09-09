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
        Schema::table('t_interview_gs', function (Blueprint $table) {
            $table->foreign(['APPLICANTID'], 't_interview_gs_ibfk_1')->references(['id'])->on('t_applicant')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['INTERVIEWER'], 't_interview_gs_ibfk_2')->references(['id'])->on('r_user')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['PROGRAM'], 't_interview_gs_ibfk_3')->references(['id'])->on('r_course')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_interview_gs', function (Blueprint $table) {
            $table->dropForeign('t_interview_gs_ibfk_1');
            $table->dropForeign('t_interview_gs_ibfk_2');
            $table->dropForeign('t_interview_gs_ibfk_3');
        });
    }
};
