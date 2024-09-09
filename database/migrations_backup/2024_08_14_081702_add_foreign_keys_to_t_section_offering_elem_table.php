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
        Schema::table('t_section_offering_elem', function (Blueprint $table) {
            $table->foreign(['SECTION'], 't_section_offering_elem_ibfk_1')->references(['id'])->on('r_section_basic')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SY'], 't_section_offering_elem_ibfk_2')->references(['CODE'])->on('r_sy')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['CURRICULUM'], 't_section_offering_elem_ibfk_3')->references(['id'])->on('r_curriculum_elem')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['CAMPUS'], 't_section_offering_elem_ibfk_4')->references(['id'])->on('r_campus')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_section_offering_elem', function (Blueprint $table) {
            $table->dropForeign('t_section_offering_elem_ibfk_1');
            $table->dropForeign('t_section_offering_elem_ibfk_2');
            $table->dropForeign('t_section_offering_elem_ibfk_3');
            $table->dropForeign('t_section_offering_elem_ibfk_4');
        });
    }
};
