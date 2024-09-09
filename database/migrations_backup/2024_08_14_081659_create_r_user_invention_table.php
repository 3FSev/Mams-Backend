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
        Schema::create('r_user_invention', function (Blueprint $table) {
            $table->id();
            $table->integer('USER_PROFILE');
            $table->string('NAME', 100)->nullable();
            $table->date('DATE_ISSUE')->nullable();
            $table->string('DEVELOPMENT', 50)->nullable();
            $table->string('SERVICE', 50)->nullable();
            $table->string('END_PRODUCT', 50)->nullable();
            $table->string('COMMERCIAL_PRODUCT', 50)->nullable();
            $table->string('COPYRIGHT_REGISTERED', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_invention');
    }
};
