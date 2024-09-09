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
        Schema::create('r_curriculum_line', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curriculum_id');
            $table->unsignedBigInteger('subject_id');
            $table->string('TERM', 11);
            $table->integer('YR_LVL');
            $table->string('ACADEMIC_TYPE', 25);

            $table->foreign('curriculum_id')->references('id')->on('r_curriculum');
            $table->foreign('subject_id')->references('id')->on('r_subject');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_line');
    }
};
