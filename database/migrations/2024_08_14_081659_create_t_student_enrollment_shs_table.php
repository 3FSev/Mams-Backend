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
        Schema::create('t_student_enrollment_shs', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SYSEM')->nullable()->index('sysem');
            $table->integer('STUDENT')->nullable()->index('student');
            $table->integer('SECTION')->nullable()->index('section');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student_enrollment_shs');
    }
};
