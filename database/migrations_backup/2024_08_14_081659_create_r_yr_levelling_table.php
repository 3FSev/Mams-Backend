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
        Schema::create('r_yr_levelling', function (Blueprint $table) {
            $table->id();
            $table->integer('COURSE')->nullable();
            $table->decimal('PERCENTAGE', 11);
            $table->integer('PRIORITY')->nullable();
            $table->string('SY', 25)->nullable();
            $table->integer('FROM_UNITS')->nullable();
            $table->integer('TO_UNITS')->nullable();
            $table->integer('YEAR_LEVEL')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_yr_levelling');
    }
};
