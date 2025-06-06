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
        Schema::table('t_fee_course', function (Blueprint $table) {
            $table->foreign(['SY_SEM'], 't_fee_course_ibfk_1')->references(['id'])->on('t_sy_sem')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['FEE'], 't_fee_course_ibfk_2')->references(['id'])->on('r_fee')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['COURSE'], 't_fee_course_ibfk_3')->references(['id'])->on('r_course')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_fee_course', function (Blueprint $table) {
            $table->dropForeign('t_fee_course_ibfk_1');
            $table->dropForeign('t_fee_course_ibfk_2');
            $table->dropForeign('t_fee_course_ibfk_3');
        });
    }
};
