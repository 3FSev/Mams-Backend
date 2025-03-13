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
        Schema::table('r_subject_group', function (Blueprint $table) {
            $table->foreign(['SUB'], 'r_subject_group_ibfk_1')->references(['ID'])->on('r_subject')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SUB'], 'r_subject_group_ibfk_2')->references(['ID'])->on('r_subject')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SUB'], 'r_subject_group_ibfk_3')->references(['ID'])->on('r_subject')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_subject_group', function (Blueprint $table) {
            $table->dropForeign('r_subject_group_ibfk_1');
            $table->dropForeign('r_subject_group_ibfk_2');
            $table->dropForeign('r_subject_group_ibfk_3');
        });
    }
};
