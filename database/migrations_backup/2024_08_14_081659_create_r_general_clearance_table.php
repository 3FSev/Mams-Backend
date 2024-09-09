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
        Schema::create('r_general_clearance', function (Blueprint $table) {
            $table->id();
            $table->string('OFFICE', 100)->nullable();
            $table->integer('SIGNATORY')->nullable();
            $table->integer('CAMPUS')->nullable();
            $table->integer('STATUS')->nullable()->default(1);
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('ADDED_BY')->nullable();
            $table->dateTime('DATE_UPDATED')->nullable();
            $table->integer('UPDATED_BY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_general_clearance');
    }
};
