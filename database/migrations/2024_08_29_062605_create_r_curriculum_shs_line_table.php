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
        Schema::create('r_curriculum_shs_line', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('CURR_ID')->nullable()->index('r_curriculum_shs_line_ibfk_1');
            $table->integer('SUBJECT')->nullable()->index('r_curriculum_shs_line_ibfk_2');
            $table->integer('GRADE_LVL')->nullable();
            $table->string('TERM', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_shs_line');
    }
};
