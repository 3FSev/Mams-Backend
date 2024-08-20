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
        Schema::table('t_hs_grade', function (Blueprint $table) {
            $table->foreign(['APPLICANTID'], 't_hs_grade_ibfk_1')->references(['id'])->on('t_applicant')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['HS_SUBJECT'], 't_hs_grade_ibfk_2')->references(['id'])->on('r_hs_subject')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_hs_grade', function (Blueprint $table) {
            $table->dropForeign('t_hs_grade_ibfk_1');
            $table->dropForeign('t_hs_grade_ibfk_2');
        });
    }
};
