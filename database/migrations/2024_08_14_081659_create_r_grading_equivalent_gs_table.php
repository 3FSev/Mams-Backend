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
        Schema::create('r_grading_equivalent_gs', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('GRADE', 10)->nullable();
            $table->string('EQUIVALENT', 20)->nullable();
            $table->string('REMARKS', 20)->nullable();
            $table->decimal('RANGEFROM', 10, 3)->nullable();
            $table->decimal('RANGETO', 10, 3)->nullable();
            $table->integer('COURSE')->nullable()->index('course');
            $table->string('STATUS', 10)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_grading_equivalent_gs');
    }
};
