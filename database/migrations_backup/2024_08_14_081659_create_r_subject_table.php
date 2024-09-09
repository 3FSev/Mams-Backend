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
        Schema::create('r_subject', function (Blueprint $table) {
            $table->id();
            $table->string('CODE', 50);
            $table->string('DESCRIPTION', 250);
            $table->integer('LEC_UNIT');
            $table->integer('LAB_UNIT');
            $table->float('CREDITED_UNIT');
            $table->integer('LEC_HR');
            $table->integer('LAB_HR');
            $table->integer('TUITION_HR');
            $table->string('ACADEMIC_TYPE', 25)->nullable();
            $table->string('IS_NSTP', 11)->nullable()->default('No');
            $table->string('IS_ELECTIVE', 5)->nullable()->default('no');
            $table->string('IS_SPECIAL', 5)->nullable()->default('no');
            $table->string('PROGRAM_TYPE', 25)->nullable()->default('COLLEGE');
            $table->integer('DISCIPLINE')->nullable();
            $table->string('IS_NEW_GE', 5)->nullable()->default('No');
            $table->string('IS_EDUC', 5)->nullable()->default('No');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_subject');
    }
};
