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
        Schema::create('u_function', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CONTROLLER', 50);
            $table->string('FUNCTION', 50);
            $table->string('NAVIGATION_NAME', 100);
            $table->string('USER_TYPE', 15);
            $table->string('TCODE', 25)->nullable();
            $table->string('NAVIGATION_PARENT', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('u_function');
    }
};
