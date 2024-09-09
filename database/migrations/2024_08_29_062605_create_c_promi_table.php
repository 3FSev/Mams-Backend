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
        Schema::create('c_promi', function (Blueprint $table) {
            $table->string('idNo', 250)->nullable();
            $table->integer('gradingPeriod')->nullable();
            $table->boolean('IsPromi')->nullable();
            $table->string('userID', 250)->nullable();
            $table->date('dateTagged')->nullable();
            $table->string('Reason', 250)->nullable();
            $table->string('sysem', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_promi');
    }
};
