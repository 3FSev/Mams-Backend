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
            $table->foreign('campus')->references('id')->on('r_campus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_building', function (Blueprint $table) {
            $table->dropForeign(['campus']);
        });
    }
};
