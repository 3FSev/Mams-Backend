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
        Schema::create('t_scholar', function (Blueprint $table) {
            $table->integer('id');
            $table->unsignedBigInteger('STUDENT_ID');
            $table->unsignedBigInteger('SY_SEM');
            $table->unsignedBigInteger('COURSE')->nullable();
            $table->string('SCHOLARSHIP', 100);

            $table->foreign('STUDENT_ID')->references('id')->on('t_student')->onDelete('cascade');
            $table->foreign('SY_SEM')->references('id')->on('sy_sems')->onDelete('cascade');
            $table->foreign('COURSE')->references('id')->on('courses')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_scholar');
    }
};
