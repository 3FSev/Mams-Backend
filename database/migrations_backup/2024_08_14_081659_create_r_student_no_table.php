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
        Schema::create('r_student_no', function (Blueprint $table) {
            $table->id();
            $table->integer('CAMPUS')->nullable();
            $table->integer('SY')->nullable();
            $table->integer('RUNNING_NO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_student_no');
    }
};
