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
        Schema::create('r_grading_system', function (Blueprint $table) {
            $table->id();
            $table->string('LABEL', 100);
            $table->decimal('PERCENT', 10);
            $table->string('STATUS', 10)->default('Active');
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('COURSE')->nullable()->index('subject');
            $table->integer('PERIOD')->nullable();
            $table->string('PROGRAM_TYPE', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_grading_system');
    }
};
