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
            $table->id();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->string('LABEL', 100)->nullable();
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('PERIOD')->nullable();
            $table->decimal('PERCENT', 10)->nullable();
            $table->string('STATUS', 10)->nullable()->default('Active');
            $table->integer('CURRICULUM')->nullable();

            $table->foreign('subject_id')->references('id')->on('r_subject');
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
