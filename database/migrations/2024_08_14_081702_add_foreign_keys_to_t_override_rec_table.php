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
        Schema::table('t_override_rec', function (Blueprint $table) {
            $table->foreign(['USER'], 't_override_rec_ibfk_1')->references(['ID'])->on('r_user')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_override_rec', function (Blueprint $table) {
            $table->dropForeign('t_override_rec_ibfk_1');
        });
    }
};
