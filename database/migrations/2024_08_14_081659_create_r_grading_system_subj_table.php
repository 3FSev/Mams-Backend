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
        Schema::create('r_grading_system_subj', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SUBJECT')->nullable()->index('subject');
            $table->string('LABEL', 100)->nullable();
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('PERIOD')->nullable();
            $table->decimal('PERCENT', 10)->nullable();
            $table->string('STATUS', 10)->nullable()->default('Active');
            $table->integer('CURRICULUM')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_grading_system_subj');
    }
};
