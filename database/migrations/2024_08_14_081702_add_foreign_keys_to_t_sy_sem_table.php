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
        Schema::table('t_sy_sem', function (Blueprint $table) {
            $table->foreign(['SY'], 't_sy_sem_ibfk_1')->references(['CODE'])->on('r_sy')->onUpdate('restrict')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_sy_sem', function (Blueprint $table) {
            $table->dropForeign('t_sy_sem_ibfk_1');
        });
    }
};
