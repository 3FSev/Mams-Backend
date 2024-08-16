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
        Schema::table('t_interview_basic', function (Blueprint $table) {
            $table->foreign(['APPLICANTID'], 't_interview_basic_ibfk_1')->references(['ID'])->on('t_applicant')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['INTERVIEWER'], 't_interview_basic_ibfk_2')->references(['ID'])->on('r_user')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_interview_basic', function (Blueprint $table) {
            $table->dropForeign('t_interview_basic_ibfk_1');
            $table->dropForeign('t_interview_basic_ibfk_2');
        });
    }
};
