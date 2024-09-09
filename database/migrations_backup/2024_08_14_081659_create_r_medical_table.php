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
        Schema::create('r_medical', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applicant_id')->nullable();
            $table->unsignedBigInteger('medical_exam_id')->nullable();
            $table->string('RESULT', 100)->nullable();
            $table->text('REMARKS')->nullable();

            $table->foreign('applicant_id')->references('id')->on('t_applicant');
            $table->foreign('medical_exam_id')->references('id')->on('r_medical_examination');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_medical');
    }
};
