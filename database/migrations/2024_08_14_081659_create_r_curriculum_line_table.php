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
            $table->integer('CURRICULUM_ID')->index('curriculum_id');
            $table->integer('SUBJECT')->index('subject');
            $table->string('TERM', 11);
            $table->integer('YR_LVL');
            $table->string('ACADEMIC_TYPE', 25);
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
