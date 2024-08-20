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
        Schema::table('r_curriculum_shs_pre', function (Blueprint $table) {
            $table->foreign(['FROM_CURR_LINE_ID'], 'r_curriculum_shs_pre_ibfk_1')->references(['id'])->on('r_curriculum_shs_line')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign(['TO_CURR_LINE_ID'], 'r_curriculum_shs_pre_ibfk_2')->references(['id'])->on('r_curriculum_shs_line')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_curriculum_shs_pre', function (Blueprint $table) {
            $table->dropForeign('r_curriculum_shs_pre_ibfk_1');
            $table->dropForeign('r_curriculum_shs_pre_ibfk_2');
        });
    }
};
