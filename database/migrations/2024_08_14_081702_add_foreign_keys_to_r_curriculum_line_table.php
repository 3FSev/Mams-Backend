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
        Schema::table('r_curriculum_line', function (Blueprint $table) {
            $table->foreign(['CURRICULUM_ID'], 'r_curriculum_line_ibfk_3')->references(['ID'])->on('r_curriculum')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign(['SUBJECT'], 'r_curriculum_line_ibfk_4')->references(['ID'])->on('r_subject')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_curriculum_line', function (Blueprint $table) {
            $table->dropForeign('r_curriculum_line_ibfk_3');
            $table->dropForeign('r_curriculum_line_ibfk_4');
        });
    }
};
