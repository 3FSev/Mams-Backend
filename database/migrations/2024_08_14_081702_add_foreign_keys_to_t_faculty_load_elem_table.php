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
        Schema::table('t_faculty_load_elem', function (Blueprint $table) {
            $table->foreign(['SECTION_OFFERING_SUBJECT'], 't_faculty_load_elem_ibfk_1')->references(['ID'])->on('t_section_offering_elem_subject')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_faculty_load_elem', function (Blueprint $table) {
            $table->dropForeign('t_faculty_load_elem_ibfk_1');
        });
    }
};
