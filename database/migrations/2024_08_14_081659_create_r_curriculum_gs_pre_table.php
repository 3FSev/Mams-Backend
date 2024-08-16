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
        Schema::create('r_curriculum_gs_pre', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('FROM_CURR_LINE_ID')->nullable();
            $table->integer('TO_CURR_LINE_ID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_gs_pre');
    }
};
