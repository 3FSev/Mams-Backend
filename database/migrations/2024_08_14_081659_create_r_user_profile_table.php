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
        Schema::create('r_user_profile', function (Blueprint $table) {
            $table->id();
            $table->integer('USER');
            $table->string('STATUS', 5);
            $table->date('DATE_REQUEST');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_profile');
    }
};
