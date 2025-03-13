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
        Schema::table('r_grading_system_subj', function (Blueprint $table) {
            $table->foreign(['SUBJECT'], 'r_grading_system_subj_ibfk_1')->references(['ID'])->on('r_subject')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_grading_system_subj', function (Blueprint $table) {
            $table->dropForeign('r_grading_system_subj_ibfk_1');
        });
    }
};
