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
        Schema::create('r_user_creative_activity', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('USER_PROFILE');
            $table->string('TITLE', 100)->nullable();
            $table->string('NATURE', 50)->nullable();
            $table->string('VENUE', 50)->nullable();
            $table->date('DATE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_creative_activity');
    }
};
