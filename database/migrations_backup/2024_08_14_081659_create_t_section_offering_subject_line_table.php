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
        Schema::create('t_section_offering_subject_line', function (Blueprint $table) {
            $table->id();
            $table->integer('SECTION_OFFERING_SUBJECT_ID')->nullable()->index('section_offering_subject_id');
            $table->string('DAY', 25)->nullable();
            $table->time('TIME_START')->nullable();
            $table->time('TIME_END')->nullable();
            $table->integer('ROOM')->nullable()->index('room');
            $table->string('TYPE', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_section_offering_subject_line');
    }
};
