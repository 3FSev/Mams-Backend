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
        Schema::table('r_curriculum_line_coreq', function (Blueprint $table) {
            $table->foreign(['CURR_LINE_ID'], 'r_curriculum_line_coreq_ibfk_2')->references(['ID'])->on('r_curriculum_line')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_curriculum_line_coreq', function (Blueprint $table) {
            $table->dropForeign('r_curriculum_line_coreq_ibfk_2');
        });
    }
};
