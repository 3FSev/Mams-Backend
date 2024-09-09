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
        Schema::create('c_rfid', function (Blueprint $table) {
            $table->string('Student_No', 250)->primary();
            $table->bigInteger('Badge_No')->nullable();
            $table->string('User', 250)->nullable();
            $table->dateTime('DateReg')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_rfid');
    }
};
