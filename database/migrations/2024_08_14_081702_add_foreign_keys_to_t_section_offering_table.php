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
        Schema::table('t_section_offering', function (Blueprint $table) {
            $table->foreign(['SY_SEM'], 't_section_offering_ibfk_2')->references(['id'])->on('t_sy_sem')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_section_offering', function (Blueprint $table) {
            $table->dropForeign('t_section_offering_ibfk_2');
        });
    }
};
