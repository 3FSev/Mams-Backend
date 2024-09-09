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
        Schema::create('r_user_achievement', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('USER_PROFILE');
            $table->string('AWARD', 50)->nullable();
            $table->string('AGENCY', 50)->nullable();
            $table->date('DATE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_achievement');
    }
};
