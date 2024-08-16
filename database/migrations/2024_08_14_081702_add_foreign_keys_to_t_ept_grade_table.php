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
        Schema::table('t_ept_grade', function (Blueprint $table) {
            $table->foreign(['APPLICANTID'], 't_ept_grade_ibfk_1')->references(['ID'])->on('t_applicant')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_ept_grade', function (Blueprint $table) {
            $table->dropForeign('t_ept_grade_ibfk_1');
        });
    }
};
