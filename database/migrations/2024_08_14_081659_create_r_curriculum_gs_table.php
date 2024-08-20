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
        Schema::create('r_curriculum_gs', function (Blueprint $table) {
            $table->id();
            $table->string('CODE', 25)->nullable();
            $table->integer('PROGRAM')->nullable()->index('program');
            $table->string('STATUS', 10)->nullable()->default('Active');
            $table->integer('SY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_gs');
    }
};
