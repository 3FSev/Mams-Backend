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
        Schema::create('r_or_series', function (Blueprint $table) {
            $table->id();
            $table->integer('CREDIT_START')->nullable();
            $table->integer('CREDIT_END')->nullable();
            $table->integer('CREDIT_IN_USE')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('DESCRIPTION', 50)->nullable();
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->integer('COUNTER')->nullable();

            $table->foreign('user_id')->references('id')->on('r_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_or_series');
    }
};
