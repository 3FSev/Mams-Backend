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
        Schema::table('t_fee_basic', function (Blueprint $table) {
            $table->foreign(['FEE_ID'], 't_fee_basic_ibfk_1')->references(['ID'])->on('r_fee_basic')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SY'], 't_fee_basic_ibfk_2')->references(['CODE'])->on('r_sy')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SYSEM'], 't_fee_basic_ibfk_3')->references(['ID'])->on('t_sy_sem')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['TRACK'], 't_fee_basic_ibfk_4')->references(['ID'])->on('r_track')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_fee_basic', function (Blueprint $table) {
            $table->dropForeign('t_fee_basic_ibfk_1');
            $table->dropForeign('t_fee_basic_ibfk_2');
            $table->dropForeign('t_fee_basic_ibfk_3');
            $table->dropForeign('t_fee_basic_ibfk_4');
        });
    }
};
