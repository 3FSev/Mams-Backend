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
        Schema::create('r_section_basic', function (Blueprint $table) {
            $table->id();
            $table->string('CODE', 25)->nullable();
            $table->integer('GRADE_LVL')->nullable();
            $table->integer('TRACK')->nullable()->index('track');
            $table->integer('STRAND')->nullable()->index('strand');
            $table->integer('SLOTS')->nullable();
            $table->string('CLASS_TYPE', 25)->nullable();
            $table->integer('CAMPUS')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_section_basic');
    }
};
