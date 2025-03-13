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
        Schema::table('t_tuition_fee', function (Blueprint $table) {
            $table->foreign(['COURSE'], 't_tuition_fee_ibfk_1')->references(['ID'])->on('r_course')->onUpdate('restrict')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_tuition_fee', function (Blueprint $table) {
            $table->dropForeign('t_tuition_fee_ibfk_1');
        });
    }
};
