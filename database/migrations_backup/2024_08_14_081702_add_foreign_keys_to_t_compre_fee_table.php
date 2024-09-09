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
        Schema::table('t_compre_fee', function (Blueprint $table) {
            $table->foreign(['PROGRAM'], 'fk_compre_program')->references(['id'])->on('r_course')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SY_SEM'], 'fk_compre_sy')->references(['id'])->on('t_sy_sem')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_compre_fee', function (Blueprint $table) {
            $table->dropForeign('fk_compre_program');
            $table->dropForeign('fk_compre_sy');
        });
    }
};
