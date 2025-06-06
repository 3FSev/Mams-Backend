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
        Schema::create('r_room_course', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('ROOM')->index('room');
            $table->integer('COURSE')->index('course');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_room_course');
    }
};
