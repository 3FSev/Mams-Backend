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
        Schema::create('t_section_offering', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('TYPE', 10);
            $table->integer('CAMPUS')->nullable();
            $table->integer('SY_SEM')->index('sy_sem');
            $table->integer('CURRICULUM_ID')->nullable();
            $table->integer('SECTION')->nullable()->index('section');
            $table->integer('YR_LVL')->nullable();
            $table->string('SECTION_IRREG', 30)->nullable();
            $table->string('PROGRAM_TYPE', 25)->default('COLLEGE');
            $table->timestamp('TIMESTAMP')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_section_offering');
    }
};
