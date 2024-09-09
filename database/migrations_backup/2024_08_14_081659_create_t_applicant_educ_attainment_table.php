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
        Schema::create('t_applicant_educ_attainment', function (Blueprint $table) {
            $table->id();
            $table->integer('app_id')->nullable();
            $table->string('name_of_school', 100)->nullable();
            $table->string('course', 100)->nullable();
            $table->string('school_level', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->integer('inclusive_yr_from')->nullable();
            $table->integer('inclusive_yr_to')->nullable();
            $table->string('honors_award', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_applicant_educ_attainment');
    }
};
