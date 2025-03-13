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
        Schema::table('r_ept_subject', function (Blueprint $table) {
            $table->foreign(['EQUIV_SUBJECT'], 'r_ept_subject_ibfk_1')->references(['ID'])->on('r_subject')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['REPLACEMENT_FOR'], 'r_ept_subject_ibfk_2')->references(['ID'])->on('r_subject')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_ept_subject', function (Blueprint $table) {
            $table->dropForeign('r_ept_subject_ibfk_1');
            $table->dropForeign('r_ept_subject_ibfk_2');
        });
    }
};
