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
        Schema::create('t_gs_history', function (Blueprint $table) {
            $table->id();
            $table->integer('SOSID')->nullable();
            $table->integer('SUBJECT')->nullable();
            $table->string('ACTION', 250)->nullable();
            $table->string('PROGRAM_TYPE', 250)->nullable();
            $table->timestamp('DATE_GENERATED')->nullable()->useCurrent();
            $table->integer('GENERATED_BY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_gs_history');
    }
};
