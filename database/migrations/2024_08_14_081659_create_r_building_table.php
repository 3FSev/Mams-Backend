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
        Schema::create('r_building', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CODE', 25);
            $table->string('NAME', 250);
            $table->integer('CAMPUS')->index('campus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_building');
    }
};
