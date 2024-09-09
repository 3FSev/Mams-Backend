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
        Schema::create('app_health', function (Blueprint $table) {
            $table->id();
            $table->string('vision', 100)->nullable();
            $table->string('hearing', 100)->nullable();
            $table->string('speech', 100)->nullable();
            $table->string('genhealth', 100)->nullable();
            $table->string('medical', 100)->nullable();
            $table->string('psychiatrist', 100)->nullable();
            $table->date('psywhen')->nullable();
            $table->string('psychologist', 100)->nullable();
            $table->date('psychowhen')->nullable();
            $table->string('counselor', 100)->nullable();
            $table->date('counwhen')->nullable();
            $table->unsignedBigInteger('applicant_id')->nullable();
            $table->string('updated_by', 50)->nullable();
            $table->date('date_updated')->nullable();

            $table->foreign('applicant_id')->references('id')->on('t_applicant');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_health');
    }
};
