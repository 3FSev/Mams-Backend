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
        Schema::create('r_user_acad_degree', function (Blueprint $table) {
            $table->id();
            $table->integer('USER_PROFILE');
            $table->string('DEGREE', 50)->nullable();
            $table->string('DISCIPLINE', 50)->nullable();
            $table->string('COURSE', 100)->nullable();
            $table->string('MAJOR', 50)->nullable();
            $table->string('MINOR', 50)->nullable();
            $table->integer('YEAR_GRADUATED')->nullable();
            $table->string('SCHOOL_NAME', 100)->nullable();
            $table->string('HONOR_REWARD', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_acad_degree');
    }
};
