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
        Schema::create('t_interview_basic', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('APPLICANTID')->nullable()->index('applicantid');
            $table->integer('INTERVIEWER')->nullable()->index('interviewer');
            $table->integer('GRADE_LVL')->nullable();
            $table->text('EVALUATION')->nullable();
            $table->string('RESULT', 10)->nullable();
            $table->timestamp('DATE_ADDED')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_interview_basic');
    }
};
