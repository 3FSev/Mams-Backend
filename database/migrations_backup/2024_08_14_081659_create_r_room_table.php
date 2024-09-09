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
        Schema::create('r_room', function (Blueprint $table) {
            $table->id();
            $table->string('CODE', 25);
            $table->string('DESCRIPTION', 80);
            $table->unsignedBigInteger('building_id')->nullable();
            $table->string('EXCLUDE_CONFLICT', 25);
            $table->string('IS_AIRCONDITIONED', 25);
            $table->integer('NO_OF_STUDENTS');
            $table->integer('FLOOR');
            $table->string('STATUS', 10)->default('active');

            $table->foreign('building_id')->references('id')->on('r_building');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_room');
    }
};
