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
        Schema::table('t_adjustment_fee', function (Blueprint $table) {
            $table->foreign(['FEE'], 't_adjustment_fee_ibfk_1')->references(['ID'])->on('r_fee')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['COURSE'], 't_adjustment_fee_ibfk_2')->references(['ID'])->on('r_course')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SUBJECT'], 't_adjustment_fee_ibfk_3')->references(['ID'])->on('r_subject')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['ROOM'], 't_adjustment_fee_ibfk_4')->references(['ID'])->on('r_room')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['STUDENT'], 't_adjustment_fee_ibfk_5')->references(['ID'])->on('t_student')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SY_SEM'], 't_adjustment_fee_ibfk_6')->references(['ID'])->on('t_sy_sem')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_adjustment_fee', function (Blueprint $table) {
            $table->dropForeign('t_adjustment_fee_ibfk_1');
            $table->dropForeign('t_adjustment_fee_ibfk_2');
            $table->dropForeign('t_adjustment_fee_ibfk_3');
            $table->dropForeign('t_adjustment_fee_ibfk_4');
            $table->dropForeign('t_adjustment_fee_ibfk_5');
            $table->dropForeign('t_adjustment_fee_ibfk_6');
        });
    }
};
