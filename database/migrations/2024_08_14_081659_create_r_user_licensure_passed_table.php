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
        Schema::create('r_user_licensure_passed', function (Blueprint $table) {
            $table->id();
            $table->integer('USER_PROFILE');
            $table->string('EXAMINATION', 15)->nullable();
            $table->string('TITLE', 50)->nullable();
            $table->date('DATE_PASSED')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_licensure_passed');
    }
};
