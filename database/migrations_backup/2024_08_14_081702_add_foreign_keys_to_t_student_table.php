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
        Schema::table('t_student', function (Blueprint $table) {
            $table->foreign(['REMEDIAL_COURSE'], 'fk_stud_rc')->references(['id'])->on('r_course')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['REMEDIAL_CURRICULUM'], 'fk_stud_rcurr')->references(['id'])->on('r_curriculum')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_student', function (Blueprint $table) {
            $table->dropForeign('fk_stud_rc');
            $table->dropForeign('fk_stud_rcurr');
        });
    }
};
