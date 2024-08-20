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
        Schema::create('t_guidance_deficiency', function (Blueprint $table) {
            $table->id();
            $table->integer('STUDENT_ID')->nullable()->index('student_id');
            $table->text('REMARKS')->nullable();
            $table->integer('SY_SEM')->nullable();
            $table->string('STATUS', 10)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_guidance_deficiency');
    }
};
