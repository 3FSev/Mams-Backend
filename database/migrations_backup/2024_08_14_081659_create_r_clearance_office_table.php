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
        Schema::create('r_clearance_office', function (Blueprint $table) {
            $table->id();
            $table->string('CODE', 20)->nullable();
            $table->string('NAME', 100)->nullable();
            $table->integer('OFFICE_HEAD')->nullable();
            $table->string('STATUS', 25)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_clearance_office');
    }
};
