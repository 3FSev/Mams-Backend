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
        Schema::table('r_curriculum_shs_line', function (Blueprint $table) {
            $table->foreign(['CURR_ID'], 'r_curriculum_shs_line_ibfk_1')->references(['ID'])->on('r_curriculum_shs')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign(['SUBJECT'], 'r_curriculum_shs_line_ibfk_2')->references(['ID'])->on('r_subject_basic')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_curriculum_shs_line', function (Blueprint $table) {
            $table->dropForeign('r_curriculum_shs_line_ibfk_1');
            $table->dropForeign('r_curriculum_shs_line_ibfk_2');
        });
    }
};
