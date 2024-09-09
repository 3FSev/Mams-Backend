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
        Schema::create('r_grading_equivalent_basic', function (Blueprint $table) {
            $table->id();
            $table->string('REMARKS', 50)->nullable();
            $table->decimal('RANGEFROM', 10, 3)->nullable();
            $table->decimal('RANGETO', 10, 3)->nullable();
            $table->string('EQUIVALENT', 50)->nullable();
            $table->string('STATUS', 10)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_grading_equivalent_basic');
    }
};
