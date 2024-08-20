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
        Schema::create('r_user_research_output', function (Blueprint $table) {
            $table->id();
            $table->integer('USER_PROFILE');
            $table->string('TITLE', 100)->nullable();
            $table->string('AUTHORS', 150)->nullable();
            $table->string('TITLE_BOOK', 100)->nullable();
            $table->integer('PAGE_NO')->nullable();
            $table->string('PLACE_PUBLISHED', 50)->nullable();
            $table->string('PUBLISHER', 50)->nullable();
            $table->date('DATE_PUBLISHED')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_research_output');
    }
};
