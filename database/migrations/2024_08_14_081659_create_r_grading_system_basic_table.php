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
            $table->integer('ID', true);
            $table->integer('GRADE_LVL')->nullable();
            $table->integer('PERIOD')->nullable();
            $table->integer('SUBJECT')->nullable()->index('subject');
            $table->string('LABEL', 50)->nullable();
            $table->decimal('PERCENTAGE', 10)->nullable();
            $table->string('STATUS', 10)->nullable();
            $table->string('is_multiple', 100)->nullable();
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
