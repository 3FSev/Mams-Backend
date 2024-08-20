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
        Schema::table('r_system_config_schedule', function (Blueprint $table) {
            $table->foreign(['COLLEGE'], 'r_system_config_schedule_ibfk_1')->references(['id'])->on('r_college')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['SY_SEM'], 'r_system_config_schedule_ibfk_2')->references(['id'])->on('t_sy_sem')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_system_config_schedule', function (Blueprint $table) {
            $table->dropForeign('r_system_config_schedule_ibfk_1');
            $table->dropForeign('r_system_config_schedule_ibfk_2');
        });
    }
};
