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
        Schema::table('r_building', function (Blueprint $table) {
            $table->foreign(['CAMPUS'], 'r_building_ibfk_1')->references(['ID'])->on('r_campus')->onUpdate('restrict')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_building', function (Blueprint $table) {
            $table->dropForeign('r_building_ibfk_1');
        });
    }
};
