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
        Schema::create('r_curriculum_shs', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CODE', 25)->nullable();
            $table->integer('STRAND')->nullable()->index('strand');
            $table->integer('TRACK')->nullable()->index('track');
            $table->string('STATUS', 10)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_shs');
    }
};
