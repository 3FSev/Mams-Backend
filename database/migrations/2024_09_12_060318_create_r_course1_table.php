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
        Schema::create('r_course1', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CODE', 25);
            $table->string('DESCRIPTION', 250);
            $table->integer('NO_OF_YEARS')->default(4);
            $table->integer('COLLEGE');
            $table->integer('DEPARTMENT')->nullable();
            $table->integer('COURSE_CATEGORY');
            $table->decimal('HSGWA', 11);
            $table->integer('NO_OF_ENROLLEES');
            $table->string('MAJOR', 75)->nullable();
            $table->string('PROGRAM_TYPE', 50)->nullable()->default('COLLEGE')->comment('COLLEGE or GS');
            $table->string('STATUS', 25)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_course1');
    }
};
