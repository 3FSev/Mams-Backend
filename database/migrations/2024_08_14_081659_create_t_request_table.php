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
        Schema::create('t_request', function (Blueprint $table) {
            $table->id();
            $table->string('STUDENT_NO', 100)->nullable();
            $table->string('NAME', 250)->nullable();
            $table->string('SENDTO', 100)->nullable();
            $table->string('SCHOOL', 250)->nullable();
            $table->string('SCHOOL_ADD', 250)->nullable();
            $table->date('SUBMITTED')->nullable();
            $table->date('FIRSTREQ')->nullable();
            $table->date('SECONDREQ')->nullable();
            $table->date('THIRDREQ')->nullable();
            $table->timestamp('DATEREQ')->nullable()->useCurrent();
            $table->string('ADDED_BY', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_request');
    }
};
