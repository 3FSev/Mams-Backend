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
        Schema::create('t_student_grades_line_basic_m', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SGLBID')->nullable()->index('sglbid');
            $table->string('LABEL', 100)->nullable();
            $table->string('GRADE', 50)->nullable();
            $table->integer('sosid')->nullable();
            $table->string('STATUS', 50)->nullable()->default('Pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student_grades_line_basic_m');
    }
};
