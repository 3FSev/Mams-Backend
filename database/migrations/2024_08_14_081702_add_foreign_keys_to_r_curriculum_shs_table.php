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
        Schema::table('r_curriculum_shs', function (Blueprint $table) {
            $table->foreign(['STRAND'], 'r_curriculum_shs_ibfk_1')->references(['ID'])->on('r_strand')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['TRACK'], 'r_curriculum_shs_ibfk_2')->references(['ID'])->on('r_track')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_curriculum_shs', function (Blueprint $table) {
            $table->dropForeign('r_curriculum_shs_ibfk_1');
            $table->dropForeign('r_curriculum_shs_ibfk_2');
        });
    }
};
