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
        Schema::create('t_tor_rc', function (Blueprint $table) {
            $table->id();
            $table->string('STUDENT_NO', 100)->nullable();
            $table->string('NAME', 250)->nullable();
            $table->string('COURSE', 100)->nullable();
            $table->string('DEGREE_OBTAINED', 50)->nullable();
            $table->string('ADMISSION_DATE', 250)->nullable();
            $table->string('SYSEM', 250)->nullable();
            $table->text('REMARKS')->nullable();
            $table->string('PREPARED_BY', 100)->nullable();
            $table->string('CHECKED_BY', 100)->nullable();
            $table->string('REGISTRAR', 100)->nullable();
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('ADDED_BY')->nullable();
            $table->string('PREV_SCHOOL', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_tor_rc');
    }
};
