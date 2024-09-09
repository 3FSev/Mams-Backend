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
        Schema::create('ci_sessions', function (Blueprint $table) {
            $table->string('session_id', 120)->nullable();
            $table->string('ip_address', 135)->nullable();
            $table->string('user_agent', 765)->nullable();
            $table->integer('last_activity')->nullable();
            $table->text('user_data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ci_sessions');
    }
};
