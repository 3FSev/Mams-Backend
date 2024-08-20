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
        Schema::create('t_interview_gs', function (Blueprint $table) {
            $table->id();
            $table->integer('APPLICANTID')->nullable()->index('applicantid');
            $table->integer('INTERVIEWER')->nullable()->index('interviewer');
            $table->integer('PROGRAM')->nullable()->index('program');
            $table->text('EVALUATION')->nullable();
            $table->string('RESULT', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_interview_gs');
    }
};
