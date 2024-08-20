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
        Schema::create('r_retention_override', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->nullable();
            $table->integer('sy_sem')->nullable();
            $table->integer('course')->nullable();
            $table->integer('allowed')->nullable();
            $table->date('date_allowed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_retention_override');
    }
};
