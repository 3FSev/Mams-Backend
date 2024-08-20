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
        Schema::create('r_user_scholarship', function (Blueprint $table) {
            $table->id();
            $table->integer('USER_PROFILE');
            $table->string('NAME', 100)->nullable();
            $table->string('PROGRAM', 100)->nullable();
            $table->string('SCHOOL', 100)->nullable();
            $table->string('FUNDING_AGENCY', 50)->nullable();
            $table->string('DURATION', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_scholarship');
    }
};
