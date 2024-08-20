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
        Schema::create('r_curriculum_shs_pre', function (Blueprint $table) {
            $table->id();
            $table->integer('FROM_CURR_LINE_ID')->nullable()->index('r_curriculum_shs_pre_ibfk_1');
            $table->integer('TO_CURR_LINE_ID')->nullable()->index('r_curriculum_shs_pre_ibfk_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_shs_pre');
    }
};
