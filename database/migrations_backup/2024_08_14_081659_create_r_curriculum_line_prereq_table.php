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
        Schema::create('r_curriculum_line_prereq', function (Blueprint $table) {
            $table->id();
            $table->integer('CURR_LINE_ID')->index('curr_line__id');
            $table->integer('SUBJECT_CURR_ID');
            $table->string('GRADE', 50)->nullable();
            $table->integer('YR_LVL')->nullable();
            $table->integer('YRLVL_PREREQ')->nullable();
            $table->integer('REQUIRED_UNITS_IN_CURRICULUM')->nullable();
            $table->decimal('PASSING_GRADE', 18)->nullable();
            $table->string('PREREQ_TYPE', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_line_prereq');
    }
};
