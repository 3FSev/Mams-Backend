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
            $table->integer('APPLICANTID')->nullable()->index('applicantid');
            $table->integer('MEDICAL_EXAMINATION')->nullable()->index('medical_examination');
            $table->string('RESULT', 100)->nullable();
            $table->text('REMARKS')->nullable();
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
