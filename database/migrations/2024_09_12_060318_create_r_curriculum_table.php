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
        Schema::create('r_curriculum', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CURRICULUM_YR', 50)->index('curriculum_yr');
            $table->integer('COURSE')->index('course');
            $table->string('STATUS', 250)->nullable()->default('Active');
            $table->integer('REPLICATE')->nullable()->index('replicate');
            $table->string('PROGRAM_TYPE', 50)->nullable()->default('COLLEGE')->comment('COLLEGE or GS');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum');
    }
};
