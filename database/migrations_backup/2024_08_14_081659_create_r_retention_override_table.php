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
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('sysem_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->integer('allowed')->nullable();
            $table->date('date_allowed')->nullable();

            $table->foreign('student_id')->references('id')->on('t_student');
            $table->foreign('sysem_id')->references('id')->on('t_sy_sem');
            $table->foreign('course_id')->references('id')->on('r_course');
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
