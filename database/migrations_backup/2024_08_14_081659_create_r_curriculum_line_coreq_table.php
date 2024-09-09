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
        Schema::create('r_curriculum_line_coreq', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curriculum_line_id')->nullable();
            $table->unsignedBigInteger('SUBJECT_CURR_ID')->nullable();

            $table->foreign('curriculum_line_id')->references('id')->on('r_curriculum_line');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_line_coreq');
    }
};
