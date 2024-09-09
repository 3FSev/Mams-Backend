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
        Schema::create('r_user_seminars_attended', function (Blueprint $table) {
            $table->id();
            $table->integer('USER_PROFILE');
            $table->string('ACTIVITY', 50)->nullable();
            $table->string('NATURE_INVOLVEMENT', 50)->nullable();
            $table->string('SPONSOR', 50)->nullable();
            $table->string('VENUE', 50)->nullable();
            $table->string('LEVEL', 50)->nullable();
            $table->date('DATE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_seminars_attended');
    }
};
