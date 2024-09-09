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
        Schema::create('r_curriculum_gs_line', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curriculum_id')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->string('category', 100)->nullable();

            $table->foreign('curriculum_id')->references('id')->on('r_curriculum_gs');
            $table->foreign('subject_id')->references('id')->on('r_subject_gs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_gs_line');
    }
};
