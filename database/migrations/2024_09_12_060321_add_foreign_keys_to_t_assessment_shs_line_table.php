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
        Schema::table('t_assessment_shs_line', function (Blueprint $table) {
            $table->foreign(['ASSESSMENT_ID'], 't_assessment_shs_line_ibfk_1')->references(['ID'])->on('t_assessment_shs')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_assessment_shs_line', function (Blueprint $table) {
            $table->dropForeign('t_assessment_shs_line_ibfk_1');
        });
    }
};
