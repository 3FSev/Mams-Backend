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
        Schema::create('r_curriculum_elem_line', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curriculum_id')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->integer('GRADE_LVL')->nullable();

            $table->foreign('curriculum_id')->references('id')->on('r_curriculum_elem');
            $table->foreign('subject_id')->references('id')->on('r_subject_basic');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_elem_line');
    }
};
