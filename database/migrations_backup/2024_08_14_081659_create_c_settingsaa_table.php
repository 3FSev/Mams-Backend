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
        Schema::create('c_settingsaa', function (Blueprint $table) {
            $table->date('DateStart')->nullable();
            $table->date('DateEnd')->nullable();
            $table->integer('GradingPeriod')->nullable();
            $table->string('sysem', 250)->nullable();
            $table->string('SetBy', 250)->nullable();
            $table->date('dateSet')->nullable();
            $table->boolean('allowPrint')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_settingsaa');
    }
};
