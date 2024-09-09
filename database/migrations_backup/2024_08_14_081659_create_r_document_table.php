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
        Schema::create('r_document', function (Blueprint $table) {
            $table->id();
            $table->string('DESCRIPTION', 100)->nullable();
            $table->string('MANDATORY', 10)->nullable();
            $table->string('APPLICANT_TYPE', 100)->nullable();
            $table->string('PURPOSE', 10)->nullable();
            $table->string('STATUS', 10)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_document');
    }
};
