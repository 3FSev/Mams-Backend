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
        Schema::create('r_course', function (Blueprint $table) {
            $table->id();
            $table->string('CODE', 25);
            $table->string('DESCRIPTION', 250);
            $table->integer('NO_OF_YEARS')->default(4);
            $table->integer('college_id');
            $table->integer('department_id')->nullable();
            $table->integer('COURSE_CATEGORY')->index('course_category');
            $table->decimal('HSGWA', 11);
            $table->integer('NO_OF_ENROLLEES');
            $table->string('MAJOR', 75)->nullable();
            $table->string('PROGRAM_TYPE', 50)->nullable()->default('COLLEGE')->comment('COLLEGE or GS');
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->binary('W_BRIDGING')->nullable()->default('0');
            $table->integer('prog_coord')->nullable();

            $table->foreign('college_id')->references('id')->on('r_college');
            $table->foreign('department_id')->references('id')->on('r_department');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_course');
    }
};
