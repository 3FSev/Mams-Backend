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
        Schema::create('t_section_offering_shs', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SECTION')->nullable()->index('section');
            $table->integer('GRADE_LVL')->nullable();
            $table->integer('SYSEM')->nullable()->index('sysem');
            $table->integer('CURRICULUM')->nullable()->index('curriculum');
            $table->integer('CAMPUS')->nullable()->index('campus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_section_offering_shs');
    }
};
