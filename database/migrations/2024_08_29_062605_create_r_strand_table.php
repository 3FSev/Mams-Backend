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
        Schema::create('r_strand', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CODE', 25)->nullable();
            $table->string('DESCRIPTION', 100)->nullable();
            $table->integer('TRACK')->nullable()->index('track');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_strand');
    }
};
