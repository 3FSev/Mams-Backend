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
        Schema::create('t_section_offering_elem', function (Blueprint $table) {
            $table->id();
            $table->integer('SECTION')->nullable()->index('section');
            $table->integer('GRADE_LVL')->nullable();
            $table->integer('SY')->nullable()->index('sy');
            $table->integer('CURRICULUM')->nullable()->index('curriculum');
            $table->integer('CAMPUS')->nullable()->index('campus');
            $table->string('PROGRAM_TYPE', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_section_offering_elem');
    }
};
