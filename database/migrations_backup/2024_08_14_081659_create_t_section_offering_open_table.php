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
        Schema::create('t_section_offering_open', function (Blueprint $table) {
            $table->id();
            $table->integer('SECTION_OFFERING')->index('t_section_offering_open_ibfk_2');
            $table->integer('COURSE')->index('course');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_section_offering_open');
    }
};
