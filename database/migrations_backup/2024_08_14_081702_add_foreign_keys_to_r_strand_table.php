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
        Schema::table('r_strand', function (Blueprint $table) {
            $table->foreign(['TRACK'], 'r_strand_ibfk_1')->references(['id'])->on('r_track')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_strand', function (Blueprint $table) {
            $table->dropForeign('r_strand_ibfk_1');
        });
    }
};
