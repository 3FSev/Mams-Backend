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
        Schema::create('r_campus', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CODE', 25);
            $table->string('NAME', 250);
            $table->string('ADDRESS', 250)->nullable();
            $table->string('TELEPHONE', 25)->nullable();
            $table->integer('DIRECTOR')->nullable()->index('director');
            $table->string('PROGRAM_TYPE', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_campus');
    }
};
