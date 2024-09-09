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
        Schema::create('r_grading_system_basic', function (Blueprint $table) {
            $table->id();
            $table->integer('GRADE_LVL')->nullable();
            $table->integer('PERIOD')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->string('LABEL', 50)->nullable();
            $table->decimal('PERCENTAGE', 10)->nullable();
            $table->string('STATUS', 10)->nullable();
            $table->string('is_multiple', 100)->nullable();

            $table->foreign('subject_id')->references('id')->on('r_subject_basic');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_grading_system_basic');
    }
};
