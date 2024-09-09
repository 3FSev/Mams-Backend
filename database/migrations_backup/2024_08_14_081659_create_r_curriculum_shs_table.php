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
            $table->id();
            $table->string('CODE', 25)->nullable();
            $table->unsignedBigInteger('strand_id')->nullable();
            $table->unsignedBigInteger('track_id')->nullable();
            $table->string('STATUS', 10)->nullable()->default('Active');

            $table->foreign('strand_id')->references('id')->on('r_strand');
            $table->foreign('track_id')->references('id')->on('r_strack');
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
