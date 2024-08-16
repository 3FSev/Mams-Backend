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
        Schema::create('t_enroll_history', function (Blueprint $table) {
            $table->integer('STUDENT_ID')->nullable();
            $table->integer('PR_COURSE')->nullable();
            $table->integer('PR_YRLVL')->nullable();
            $table->integer('SY_SEM')->nullable();
            $table->integer('ASSESSID')->nullable();
            $table->integer('ASSESS_COURSE')->nullable();
            $table->integer('ASSESS_YRLVL')->nullable();
            $table->integer('ENROLLID')->nullable();
            $table->integer('ENROLL_YRLVL')->nullable();
            $table->timestamp('DATE_CREATED')->useCurrent();
            $table->integer('USER')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_enroll_history');
    }
};
