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
        Schema::table('r_strand_all', function (Blueprint $table) {
            $table->foreign(['TRACK'], 'r_strand_all_ibfk_1')->references(['ID'])->on('r_track_all')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_strand_all', function (Blueprint $table) {
            $table->dropForeign('r_strand_all_ibfk_1');
        });
    }
};
