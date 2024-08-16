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
        Schema::table('t_section_offering_open', function (Blueprint $table) {
            $table->foreign(['SECTION_OFFERING'], 't_section_offering_open_ibfk_2')->references(['ID'])->on('t_section_offering')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['COURSE'], 't_section_offering_open_ibfk_3')->references(['ID'])->on('r_course')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_section_offering_open', function (Blueprint $table) {
            $table->dropForeign('t_section_offering_open_ibfk_2');
            $table->dropForeign('t_section_offering_open_ibfk_3');
        });
    }
};
