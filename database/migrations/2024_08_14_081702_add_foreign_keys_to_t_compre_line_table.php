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
        Schema::table('t_compre_line', function (Blueprint $table) {
            $table->foreign(['COMPRE'], 'fk_compre_cl')->references(['ID'])->on('t_compre')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['FACULTY'], 'fk_faculty_cl')->references(['ID'])->on('r_user')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SUBJECT'], 'fk_subject_cl')->references(['ID'])->on('r_subject')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_compre_line', function (Blueprint $table) {
            $table->dropForeign('fk_compre_cl');
            $table->dropForeign('fk_faculty_cl');
            $table->dropForeign('fk_subject_cl');
        });
    }
};
