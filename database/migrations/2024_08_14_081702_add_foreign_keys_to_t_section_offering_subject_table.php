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
        Schema::table('t_section_offering_subject', function (Blueprint $table) {
            $table->foreign(['SECTION_OFFERING_ID'], 't_section_offering_subject_ibfk_1')->references(['ID'])->on('t_section_offering')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SUBJECT'], 't_section_offering_subject_ibfk_2')->references(['ID'])->on('r_subject')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_section_offering_subject', function (Blueprint $table) {
            $table->dropForeign('t_section_offering_subject_ibfk_1');
            $table->dropForeign('t_section_offering_subject_ibfk_2');
        });
    }
};
