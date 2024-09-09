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
        Schema::create('r_curriculum_elem', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CODE', 25)->nullable();
            $table->string('CLASS_TYPE', 25)->nullable();
            $table->string('PROGRAM_TYPE', 25)->nullable();
            $table->string('FLAG', 25)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_curriculum_elem');
    }
};
