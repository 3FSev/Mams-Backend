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
        Schema::create('u_access_control', function (Blueprint $table) {
            $table->integer('USER_ID');
            $table->integer('FUNCTION_ID');
            $table->string('ACCESS', 5)->nullable();

            $table->unique(['USER_ID', 'FUNCTION_ID'], 'uq_ac');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('u_access_control');
    }
};
