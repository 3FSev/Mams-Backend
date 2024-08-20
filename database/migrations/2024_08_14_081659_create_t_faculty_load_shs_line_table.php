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
        Schema::create('t_faculty_load_shs_line', function (Blueprint $table) {
            $table->id();
            $table->integer('FACULTY_LOAD')->nullable();
            $table->integer('FACULTY')->nullable();
            $table->string('LOAD_TYPE', 25)->nullable();
            $table->time('TIME_START')->nullable();
            $table->time('TIME_END')->nullable();
            $table->string('DAY', 25)->nullable();
            $table->string('STATUS', 25)->nullable();
            $table->string('IS_MAIN', 5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_faculty_load_shs_line');
    }
};
