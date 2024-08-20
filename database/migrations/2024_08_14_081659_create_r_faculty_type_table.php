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
        Schema::create('r_faculty_type', function (Blueprint $table) {
            $table->id();
            $table->string('DESCRIPTION', 250)->nullable()->unique('description');
            $table->integer('MAXHR_REG_LOAD')->nullable();
            $table->integer('MAXHR_PART_LOAD')->nullable();
            $table->integer('MAXHR_TEMP_LOAD')->nullable();
            $table->string('STATUS', 10)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_faculty_type');
    }
};
